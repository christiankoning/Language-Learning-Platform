<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Language;
use App\Models\PracticeLog;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function start(Language $language, Category $category, $direction)
    {
        if (!in_array($direction, ['recognition', 'recall'])) {
            abort(404);
        }

        $items = Item::where('category_id', $category->id)
            ->where('direction', $direction)
            ->inRandomOrder()
            ->get();

        if ($items->isEmpty()) {
            return back()->with('error', 'No items available for this category and direction.');
        }

        session([
            'practice.items' => $items->toArray(),
            'practice.original_items' => $items->toArray(),
            'practice.current' => 0,
            'practice.incorrect' => [],
            'practice.skipped' => [],
            'practice.direction' => $direction,
            'practice.language_slug' => $language->slug,
            'practice.category_slug' => $category->slug,
        ]);

        return redirect()->route('practice.show');
    }

    public function show()
    {
        $items = session('practice.items');
        $current = session('practice.current', 0);
        $direction = session('practice.direction', 'recognition');

        if (!$items || !isset($items[$current])) {
            return redirect()->route('practice.results');
        }

        $item = (object) $items[$current];

        if ($direction === 'recall' && !empty($item->extra_data)) {
            $extra = json_decode($item->extra_data, true);
            if (!empty($extra['alt_prompts'])) {
                $allPrompts = array_merge([$item->prompt], $extra['alt_prompts']);
                $item->prompt = implode(' / ', $allPrompts);
            }
        }

        return view('practice.question', compact('item'));
    }

    public function submit(Request $request)
    {
        $answer = trim($request->input('answer'));
        $items = session('practice.items');
        $current = session('practice.current', 0);
        $direction = session('practice.direction', 'recognition');
        $item = (object) $items[$current];

        $submitted = strtolower($answer);
        $validAnswers = [strtolower($item->answer)];

        if ($direction === 'recall' && !empty($item->romaji)) {
            $validAnswers[] = strtolower($item->romaji);
        }

        if ($direction === 'recognition' && !empty($item->extra_data)) {
            $extra = json_decode($item->extra_data, true);
            if (!empty($extra['alt_answers'])) {
                foreach ($extra['alt_answers'] as $alt) {
                    $validAnswers[] = strtolower($alt);
                }
            }
        }

        if (in_array($submitted, $validAnswers)) {
            session(['practice.current' => $current + 1]);
            session()->flash('feedback', 'correct');
        } else {
            $incorrect = session('practice.incorrect', []);
            $incorrect[] = $item;
            session(['practice.incorrect' => $incorrect]);
            session()->flash('feedback', 'incorrect');
        }

        return redirect()->route('practice.show');
    }

    public function skip()
    {
        $items = session('practice.items');
        $current = session('practice.current', 0);

        $skippedItem = $items[$current];
        unset($items[$current]);

        $items = array_values($items);

        $skipped = session('practice.skipped', []);
        $skipped[] = $skippedItem;

        session([
            'practice.items' => [...$items, $skippedItem],
            'practice.skipped' => $skipped,
            'practice.current' => 0,
        ]);

        return redirect()->route('practice.show');
    }

    public function results()
    {
        $allItems = session('practice.original_items', []);
        $incorrect = session('practice.incorrect', []);
        $skipped = session('practice.skipped', []);
        $currentIndex = session('practice.current', 0);
        $direction = session('practice.direction', 'recognition');

        $totalItems = count($allItems);
        $incorrectCount = count($incorrect);
        $skippedCount = count($skipped);

        // If no questions were answered at all
        if ($currentIndex === 0 && $incorrectCount === 0 && $skippedCount === 0) {
            $correct = 0;
            $missed = $totalItems;
        } else {
            $correct = $currentIndex;
            $missed = $totalItems - $correct;
        }

        $accuracy = $totalItems > 0 ? round(($correct / $totalItems) * 100) : 0;

        // Group incorrect items
        $incorrectCounts = [];
        foreach ($incorrect as $item) {
            $item = (object) $item;
            $id = $item->id;
            $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

            $correctDisplay = $direction === 'recall'
                ? $item->answer . (!empty($item->romaji) ? " ({$item->romaji})" : '')
                : implode(' / ', array_merge([$item->answer], $extra['alt_answers'] ?? []));

            if (!isset($incorrectCounts[$id])) {
                $incorrectCounts[$id] = [
                    'item' => $item,
                    'count' => 1,
                    'correct_display' => $correctDisplay,
                ];
            } else {
                $incorrectCounts[$id]['count']++;
            }
        }

        // Group skipped items
        $skippedItems = [];
        foreach ($skipped as $item) {
            $item = (object) $item;
            $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

            $item->correct_display = $direction === 'recall'
                ? $item->answer . (!empty($item->romaji) ? " ({$item->romaji})" : '')
                : implode(' / ', array_merge([$item->answer], $extra['alt_answers'] ?? []));

            $skippedItems[$item->id] = $item;
        }

        // Save to database
        $user = auth()->user();
        $languageSlug = session('practice.language_slug');
        $categorySlug = session('practice.category_slug');
        $direction = session('practice.direction');

        $language = Language::where('slug', $languageSlug)->first();
        $category = Category::where('slug', $categorySlug)->first();

        if ($user && $language && $category) {
            PracticeLog::create([
                'user_id' => $user->id,
                'language_id' => $language->id,
                'category_id' => $category->id,
                'direction' => $direction,
                'correct' => $correct,
                'missed' => $missed,
                'accuracy' => $accuracy,
            ]);
        }

        // Clear the session
        session()->forget([
            'practice.items',
            'practice.original_items',
            'practice.current',
            'practice.incorrect',
            'practice.skipped',
            'practice.language_slug',
            'practice.category_slug',
            'practice.direction',
        ]);

        return view('practice.complete', compact(
            'correct',
            'missed',
            'accuracy',
            'incorrectCounts',
            'skippedItems',
            'languageSlug',
            'categorySlug',
            'direction'
        ));
    }
}
