<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Language;
use App\Models\TimedAttempt;
use App\Models\CategoryUserProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class TimedController extends Controller
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
            return back()->with('error', 'No items available.');
        }

        session([
            'timed.items' => $items->toArray(),
            'timed.original_count' => $items->count(),
            'timed.current' => 0,
            'timed.correct' => 0,
            'timed.start_time' => now()->toISOString(),
            'timed.skipped' => [],
            'timed.language_id' => $language->id,
            'timed.category_id' => $category->id,
            'timed.direction' => $direction,
        ]);

        return redirect()->route('timed.show');
    }

    public function show()
    {
        $items = session('timed.items');
        $current = session('timed.current', 0);
        $startTime = session('timed.start_time');

        if (!$items || !isset($items[$current])) {
            return redirect()->route('timed.results');
        }

        $item = (object) $items[$current];

        $direction = session('timed.direction', 'recognition');
        $lang = auth()->user()->preferred_language;
        $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

        if ($direction === 'recall') {
            if (!empty($extra['translations'][$lang])) {
                $item->prompt = implode(' / ', $extra['translations'][$lang]);
            } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                $item->prompt = implode(' / ', $extra['translations']);
            }
        }

        return view('timed.question', compact('item', 'startTime'));
    }

    public function submit(Request $request)
    {
        $answer = strtolower(trim($request->input('answer')));
        $items = session('timed.items');
        $current = session('timed.current', 0);
        $item = (object) $items[$current];
        $direction = session('timed.direction', 'recognition');
        $lang = auth()->user()->preferred_language;

        $validAnswers = [];
        $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

        $kanaOnlyTypes = ['Main Kana', 'Dakuten Kana', 'Combination Kana', 'All Kana'];

        if ($direction === 'recall') {
            // In recall, prompt is translation (e.g. Dutch), so correct answer is kana/romaji
            if (!empty($item->answer)) {
                $validAnswers[] = strtolower($item->answer); // kana
            }
            if (!in_array($item->type, $kanaOnlyTypes) && !empty($item->romaji)) {
                $validAnswers[] = strtolower($item->romaji);
            }
        } else {
            // recognition mode, prompt is kana, answer is translated word
            if (!empty($extra['translations'][$lang])) {
                $validAnswers = array_map('strtolower', $extra['translations'][$lang]);
            } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                $validAnswers = array_map('strtolower', $extra['translations']);
            } else {
                $validAnswers[] = strtolower($item->answer);
            }

            // Include alt answers
            if (!empty($extra['alt_answers'])) {
                foreach ($extra['alt_answers'] as $alt) {
                    $validAnswers[] = strtolower($alt);
                }
            }
        }

        if (in_array($answer, $validAnswers)) {
            session(['timed.correct' => session('timed.correct') + 1]);
            session()->flash('feedback', 'correct');
        } else {
            session()->flash('feedback', 'incorrect');
        }

        session(['timed.current' => $current + 1]);
        return redirect()->route('timed.show');
    }


    public function skip()
    {
        $current = session('timed.current', 0);
        $skipped = session('timed.skipped', []);
        $items = session('timed.items');

        if (isset($items[$current])) {
            $skipped[] = (object) $items[$current];
        }

        session([
            'timed.skipped' => $skipped,
            'timed.current' => $current + 1,
        ]);

        return redirect()->route('timed.show');
    }

    public function results()
    {
        $user = Auth::user();
        $preferredLang = $user->preferred_language;

        $correct = session('timed.correct', 0);
        $total = session('timed.original_count', 1);
        $missed = $total - $correct;
        $accuracy = $total > 0 ? (int) round(($correct / $total) * 100) : 0;

        $startTime = Carbon::parse(session('timed.start_time'));
        $endTime = now();

        $timeMs = (int) round(
            $startTime->lessThanOrEqualTo($endTime)
                ? $startTime->diffInMilliseconds($endTime)
                : 0
        );

        $languageId = session('timed.language_id');
        $categoryId = session('timed.category_id');
        $direction = session('timed.direction');

        $language = Language::find($languageId);
        $category = Category::find($categoryId);

        // Process skipped items
        $skippedItems = session('timed.skipped', []);
        $processedSkipped = [];

        foreach ($skippedItems as $item) {
            $item = (object) $item;
            $extra = !empty($item->extra_data) ? json_decode($item->extra_data, true) : [];

            $answers = [$item->answer];
            if (!empty($extra['translations'][$preferredLang])) {
                $answers = $extra['translations'][$preferredLang];
            } elseif (!empty($extra['translations']) && array_values($extra['translations']) === $extra['translations']) {
                $answers = $extra['translations'];
            }

            $item->translated_prompt = $direction === 'recall'
                ? implode(' / ', $answers)
                : $item->prompt;

            $item->correct_display = $direction === 'recall'
                ? $item->answer . (!empty($item->romaji) ? " ({$item->romaji})" : '')
                : implode(' / ', array_merge([$item->answer], $extra['alt_answers'] ?? []));

            $processedSkipped[$item->id] = $item;
        }

        $newBestAccuracy = false;
        $newBestTime = false;
        $previousAccuracy = null;
        $previousTimeMs = null;
        $previousFormattedTime = null;

        // Store the attempt
        $attemptCount = TimedAttempt::where('user_id', $user->id)
            ->where('category_id', $categoryId)
            ->where('direction', $direction)
            ->count();

        $attemptNumber = $attemptCount + 1;

        TimedAttempt::create([
            'user_id' => $user->id,
            'category_id' => $categoryId,
            'direction' => $direction,
            'correct' => $correct,
            'missed' => $missed,
            'time_ms' => $timeMs,
            'attempt_number' => $attemptNumber,
            'finished_at' => $endTime,
        ]);

        // Update or create user progress
        $existing = CategoryUserProgress::where([
            'user_id' => $user->id,
            'category_id' => $categoryId,
            'direction' => $direction,
        ])->first();

        $shouldUpdate = false;

        if (!$existing) {
            $existing = new CategoryUserProgress([
                'user_id' => $user->id,
                'category_id' => $categoryId,
                'direction' => $direction,
            ]);
            $newBestAccuracy = true;
            $newBestTime = true;
            $shouldUpdate = true;
        } else {
            $previousAccuracy = $existing->best_accuracy;
            $previousTimeMs = (int) $existing->best_time_ms;

            if ($accuracy > $existing->best_accuracy) {
                $newBestAccuracy = true;
                $newBestTime = true;
                $shouldUpdate = true;
            } elseif ($accuracy === $existing->best_accuracy && $timeMs < $existing->best_time_ms) {
                $newBestTime = true;
                $shouldUpdate = true;
            }
        }

        if ($shouldUpdate) {
            $existing->best_accuracy = max($accuracy, $existing->best_accuracy);
            $existing->best_time_ms = min($timeMs, $existing->best_time_ms ?? PHP_INT_MAX);
        }

        $existing->last_practiced_at = now();
        $existing->save();

        $formattedTime = sprintf(
            '%02d:%02d:%02d.%02d',
            floor($timeMs / 3600000),
            floor(($timeMs % 3600000) / 60000),
            floor(($timeMs % 60000) / 1000),
            floor(($timeMs % 1000) / 10)
        );

        if (!is_null($previousTimeMs)) {
            $previousFormattedTime = sprintf(
                '%02d:%02d:%02d.%02d',
                floor($previousTimeMs / 3600000),
                floor(($previousTimeMs % 3600000) / 60000),
                floor(($previousTimeMs % 60000) / 1000),
                floor(($previousTimeMs % 1000) / 10)
            );
        }

        session()->forget([
            'timed.items',
            'timed.original_count',
            'timed.current',
            'timed.correct',
            'timed.start_time',
            'timed.skipped',
            'timed.language_id',
            'timed.category_id',
            'timed.direction',
        ]);

        return view('timed.complete', compact(
            'correct',
            'missed',
            'accuracy',
            'timeMs',
            'formattedTime',
            'language',
            'category',
            'direction',
            'newBestAccuracy',
            'newBestTime',
            'previousAccuracy',
            'previousTimeMs',
            'previousFormattedTime',
            'processedSkipped'
        ));
    }
}
