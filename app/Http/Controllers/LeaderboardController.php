<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\TimedAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function global(Language $language, Category $category, $direction)
    {
        if (!in_array($direction, ['recognition', 'recall'])) {
            abort(404);
        }

        $user = auth()->user();

        // Subquery: best attempt per user
        $bestAttempts = TimedAttempt::selectRaw('
        user_id,
        MAX(correct / (correct + missed)) as accuracy_ratio,
        MIN(time_ms) as best_time
    ')
            ->where('category_id', $category->id)
            ->where('direction', $direction)
            ->groupBy('user_id');

        // Full attempts + user info
        $attempts = TimedAttempt::select('timed_attempts.*')
            ->joinSub($bestAttempts, 'best_attempts', function ($join) {
                $join->on('timed_attempts.user_id', '=', 'best_attempts.user_id')
                    ->whereRaw('(timed_attempts.correct / (timed_attempts.correct + timed_attempts.missed)) = best_attempts.accuracy_ratio')
                    ->whereColumn('timed_attempts.time_ms', '=', 'best_attempts.best_time');
            })
            ->where('category_id', $category->id)
            ->where('direction', $direction)
            ->with('user')
            ->orderByRaw('(correct / (correct + missed)) DESC')
            ->orderBy('time_ms', 'ASC')
            ->paginate(20);

        // Add rank styling
        foreach ($attempts as $index => $attempt) {
            $rank = ($attempts->currentPage() - 1) * $attempts->perPage() + $index + 1;

            $attempt->rank = $rank;
            $attempt->accuracy_percent = $attempt->correct + $attempt->missed > 0
                ? round(($attempt->correct / ($attempt->correct + $attempt->missed)) * 100)
                : 0;

            $attempt->formatted_time = sprintf('%02d:%02d:%02d.%02d',
                floor($attempt->time_ms / 3600000),
                floor(($attempt->time_ms % 3600000) / 60000),
                floor(($attempt->time_ms % 60000) / 1000),
                floor(($attempt->time_ms % 1000) / 10)
            );

            $attempt->row_class = match ($rank) {
                1 => 'bg-yellow-400 text-black font-bold',
                2 => 'bg-gray-300 text-black font-semibold',
                3 => 'bg-orange-400 text-black font-semibold',
                default => ($attempt->user_id === $user->id)
                    ? 'bg-white/10 text-white font-semibold'
                    : 'text-white/90'
            };
        }

        // Determine user's global rank (if not in top 20)
        $userRank = null;
        $userEntry = null;

        $allUserAttempts = TimedAttempt::select('user_id', DB::raw('MAX(correct / (correct + missed)) as accuracy_ratio'), DB::raw('MIN(time_ms) as best_time'))
            ->where('category_id', $category->id)
            ->where('direction', $direction)
            ->groupBy('user_id')
            ->get()
            ->sortByDesc(fn ($item) => [$item->accuracy_ratio, -$item->best_time])
            ->values();

        foreach ($allUserAttempts as $index => $entry) {
            if ($entry->user_id === $user->id) {
                $userRank = $index + 1;
                $userEntry = $entry;
                break;
            }
        }

        return view('leaderboards.global', compact('attempts', 'language', 'category', 'direction', 'userRank', 'userEntry'));
    }
}
