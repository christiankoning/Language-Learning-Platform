<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Language;
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
            'practice.current' => 0,
            'practice.incorrect' => [],
            'practice.direction' => $direction,
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

        // Show multiple meanings in recall
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

        // Add romaji (if recall)
        if ($direction === 'recall' && !empty($item->romaji)) {
            $validAnswers[] = strtolower($item->romaji);
        }

        // Add alt answers (if recognition)
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

        $items = array_values($items); // reindex

        $incorrect = session('practice.incorrect', []);
        $incorrect[] = $skippedItem;

        session([
            'practice.items' => [...$items, $skippedItem],
            'practice.incorrect' => $incorrect,
            'practice.current' => 0,
        ]);

        return redirect()->route('practice.show');
    }

    public function results()
    {
        // Clear the session to reset practice mode
        session()->forget(['practice.items', 'practice.current', 'practice.incorrect', 'practice.direction']);

        return view('practice.complete');
    }
}
