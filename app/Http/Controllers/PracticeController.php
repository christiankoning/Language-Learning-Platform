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
        $lang = auth()->user()->preferred_language;

        if (!$items || !isset($items[$current])) {
            return redirect()->route('practice.results');
        }

        $item = (object) $items[$current];
        $prompt = $item->prompt;

        $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

        if ($direction === 'recall') {
            if (!empty($extra['translations'][$lang])) {
                $prompt = implode(' / ', $extra['translations'][$lang]);
            } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                $prompt = implode(' / ', $extra['translations']);
            }
            $item->prompt = $prompt;
        }

        return view('practice.question', compact('item'));
    }

    public function submit(Request $request)
    {
        $answer = trim($request->input('answer'));
        $items = session('practice.items');
        $current = session('practice.current', 0);
        $direction = session('practice.direction', 'recognition');
        $lang = auth()->user()->preferred_language;

        $item = (object) $items[$current];
        $submitted = strtolower($answer);

        $validAnswers = [];
        $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

        $kanaOnlyTypes = ['Main Kana', 'Dakuten Kana', 'Combination Kana', 'All Kana'];

        if ($direction === 'recall') {
            // Recall: answer should be kana (and maybe romaji)
            $validAnswers[] = strtolower($item->answer);
            if (!in_array($item->type, $kanaOnlyTypes) && !empty($item->romaji)) {
                $validAnswers[] = strtolower($item->romaji);
            }
        } else {
            // Recognition: answer is a translation (possibly with alternatives)
            if (!empty($extra['translations'][$lang])) {
                $validAnswers = array_map('strtolower', $extra['translations'][$lang]);
            } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                $validAnswers = array_map('strtolower', $extra['translations']);
            } else {
                $validAnswers[] = strtolower($item->answer);
            }

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
        $preferredLang = auth()->user()->preferred_language;

        $totalItems = count($allItems);
        $correct = $currentIndex;
        $missed = $totalItems - $correct;
        $accuracy = $totalItems > 0 ? round(($correct / $totalItems) * 100) : 0;

        $incorrectCounts = [];
        foreach ($incorrect as $item) {
            $item = (object) $item;
            $id = $item->id;
            $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

            // Build correct answer
            if ($direction === 'recall') {
                $answers = [$item->answer];
                if (!empty($item->romaji)) {
                    $answers[] = $item->romaji;
                }
                $correctDisplay = implode(' / ', $answers);
            } else {
                if (!empty($extra['translations'][$preferredLang])) {
                    $correctAnswers = $extra['translations'][$preferredLang];
                } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                    $correctAnswers = $extra['translations'];
                } else {
                    $correctAnswers = [$item->answer];
                }
                $correctDisplay = implode(' / ', $correctAnswers);
            }

            // Build translated prompt for recall
            if ($direction === 'recall') {
                if (!empty($extra['translations'][$preferredLang])) {
                    $item->prompt = implode(' / ', $extra['translations'][$preferredLang]);
                } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                    $item->prompt = implode(' / ', $extra['translations']);
                }
            }

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

        $skippedItems = [];
        foreach ($skipped as $item) {
            $item = (object) $item;
            $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

            if ($direction === 'recall') {
                if (!empty($extra['translations'][$preferredLang])) {
                    $item->prompt = implode(' / ', $extra['translations'][$preferredLang]);
                } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                    $item->prompt = implode(' / ', $extra['translations']);
                }

                $answers = [$item->answer];
                if (!empty($item->romaji)) {
                    $answers[] = $item->romaji;
                }
                $item->correct_display = implode(' / ', $answers);
            } else {
                if (!empty($extra['translations'][$preferredLang])) {
                    $correctAnswers = $extra['translations'][$preferredLang];
                } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                    $correctAnswers = $extra['translations'];
                } else {
                    $correctAnswers = [$item->answer];
                }
                $item->correct_display = implode(' / ', $correctAnswers);
            }

            $skippedItems[$item->id] = $item;
        }

        $user = auth()->user();
        $languageSlug = session('practice.language_slug');
        $categorySlug = session('practice.category_slug');

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
