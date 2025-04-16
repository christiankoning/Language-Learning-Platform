<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryUserProgress;
use App\Models\Language;
use App\Models\PracticeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Get all practiced category IDs (from both Practice and Timed Mode)
        $practiceCategoryIds = PracticeLog::where('user_id', $userId)->pluck('category_id')->toArray();
        $timedCategoryIds = CategoryUserProgress::where('user_id', $userId)->pluck('category_id')->toArray();

        $allCategoryIds = array_unique(array_merge($practiceCategoryIds, $timedCategoryIds));

        // Load categories and group by language
        $categories = Category::with('language')
            ->whereIn('id', $allCategoryIds)
            ->get();

        $grouped = $categories->groupBy(fn($cat) => $cat->language_id);

        // Load languages with the started categories
        $languages = Language::whereIn('id', $grouped->keys())->get();

        foreach ($languages as $language) {
            $language->categories = $grouped[$language->id]->map(function ($category) use ($userId) {
                $progress = CategoryUserProgress::where('user_id', $userId)
                    ->where('category_id', $category->id)
                    ->get()
                    ->keyBy('direction');

                // Add formatted time string for each progress record
                $progress->transform(function ($record) {
                    $ms = $record->best_time_ms ?? 0;

                    $record->formatted_best_time = sprintf(
                        '%02d:%02d:%02d.%02d',
                        floor($ms / 3600000),
                        floor(($ms % 3600000) / 60000),
                        floor(($ms % 60000) / 1000),
                        floor(($ms % 1000) / 10)
                    );

                    return $record;
                });

                $category->progress = $progress;

                return $category;
            });
        }

        return view('dashboard', [
            'startedLanguages' => $languages
        ]);
    }
}
