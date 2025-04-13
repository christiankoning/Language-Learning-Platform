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
            ->get(['id', 'prompt', 'answer', 'romaji']);

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

        if (!$items || !isset($items[$current])) {
            return view('practice.complete');
        }

        $item = (object) $items[$current];
        return view('practice.question', compact('item'));
    }

    public function submit(Request $request)
    {
        $answer = trim($request->input('answer'));
        $items = session('practice.items');
        $current = session('practice.current', 0);
        $direction = session('practice.direction', 'recognition');
        $item = (object) $items[$current];

        $expected = strtolower($item->answer);
        $submitted = strtolower($answer);

        $isCorrect = $submitted === $expected;

        if ($direction === 'recall' && !empty($item->romaji)) {
            $isCorrect = $isCorrect || $submitted === strtolower($item->romaji);
        }

        if ($isCorrect) {
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
        $items[] = $skippedItem;
        $items = array_values($items);

        session([
            'practice.items' => $items,
            'practice.current' => $current + 1,
        ]);

        return redirect()->route('practice.show');
    }
}
