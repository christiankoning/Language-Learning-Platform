<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\TimedAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Get all categories/subcategories the user has played in
        $categoryIds = TimedAttempt::where('user_id', $user->id)
            ->pluck('category_id')
            ->unique();

        $categories = Category::with('parent', 'language')
            ->whereIn('id', $categoryIds)
            ->get();

        return view('leaderboards.index', compact('categories'));
    }

    public function personal(Language $language, Category $category, $direction)
    {
        if (!in_array($direction, ['recognition', 'recall'])) {
            abort(404);
        }

        $user = auth()->user();

        $attempts = TimedAttempt::where('user_id', $user->id)
            ->where('category_id', $category->id)
            ->where('direction', $direction)
            ->orderByRaw('(correct / (correct + missed)) DESC')
            ->orderBy('time_ms', 'ASC')
            ->paginate(20);

        // Enhance each attempt with display data
        foreach ($attempts as $index => $attempt) {
            $rank = ($attempts->currentPage() - 1) * $attempts->perPage() + $index + 1;

            $accuracy = $attempt->correct + $attempt->missed > 0
                ? round(($attempt->correct / ($attempt->correct + $attempt->missed)) * 100)
                : 0;

            $formattedTime = sprintf('%02d:%02d:%02d.%02d',
                floor($attempt->time_ms / 3600000),
                floor(($attempt->time_ms % 3600000) / 60000),
                floor(($attempt->time_ms % 60000) / 1000),
                floor(($attempt->time_ms % 1000) / 10)
            );

            $rowClass = match ($rank) {
                1 => 'bg-yellow-400 text-black',
                2 => 'bg-gray-300 text-black',
                3 => 'bg-orange-400 text-black',
                default => 'bg-white/10 text-white'
            };

            // Attach values to the model instance
            $attempt->rank = $rank;
            $attempt->accuracy_percent = $accuracy;
            $attempt->formatted_time = $formattedTime;
            $attempt->formatted_date = Carbon::parse($attempt->finished_at)->format('d-m-Y H:i ');
            $attempt->row_class = $rowClass;
        }

        return view('leaderboards.personal', compact('attempts', 'language', 'category', 'direction'));
    }
}
