<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LanguagePreferenceController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }

    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::patch('/language-preference', [LanguagePreferenceController::class, 'update'])
    ->middleware(['auth'])
    ->name('language-preference.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/languages', [LanguageController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('languages.index');

Route::get('/languages/{language:slug}/categories', [LanguageController::class, 'categories'])->name('languages.categories');

Route::get('/languages/{language:slug}/{category:slug}', [CategoryController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('category.show');

Route::get('/languages/{language:slug}/{category:slug}/{direction}', [CategoryController::class, 'start'])
    ->middleware(['auth', 'verified'])
    ->name('category.start');

Route::get('/languages/{language:slug}/{category:slug}/{direction}/practice', [PracticeController::class, 'start'])
    ->middleware(['auth', 'verified'])
    ->name('practice.start');

Route::get('/practice', [PracticeController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('practice.show');

Route::post('/practice/answer', [PracticeController::class, 'submit'])
    ->middleware(['auth', 'verified'])
    ->name('practice.submit');

Route::post('/practice/skip', [PracticeController::class, 'skip'])
    ->middleware(['auth', 'verified'])
    ->name('practice.skip');

Route::get('/practice/results', [PracticeController::class, 'results'])
    ->middleware(['auth', 'verified'])
    ->name('practice.results');

Route::get('/languages/{language:slug}/{category:slug}/{direction}/timed', [TimedController::class, 'start'])
    ->middleware(['auth', 'verified'])
    ->name('timed.start');

Route::get('/timed', [TimedController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('timed.show');

Route::post('/timed/answer', [TimedController::class, 'submit'])
    ->middleware(['auth', 'verified'])
    ->name('timed.submit');

Route::post('/timed/skip', [TimedController::class, 'skip'])
    ->middleware(['auth', 'verified'])
    ->name('timed.skip');

Route::get('/timed/results', [TimedController::class, 'results'])
    ->middleware(['auth', 'verified'])
    ->name('timed.results');

Route::get('/leaderboards', [LeaderboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('leaderboard.index');

Route::get('/leaderboards/personal/{language:slug}/{category:slug}/{direction}', [LeaderboardController::class, 'personal'])
    ->middleware(['auth', 'verified'])
    ->name('leaderboard.personal');

Route::get('/leaderboards/global/{language:slug}/{category:slug}/{direction}', [LeaderboardController::class, 'global'])
    ->middleware(['auth', 'verified'])
    ->name('leaderboard.global');

Route::get('/learn', [LearningController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('learn.index');

Route::get('/learn/{language:slug}/{topic?}/{subtopic?}', [LearningController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('learn.show');

require __DIR__.'/auth.php';
