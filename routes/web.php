<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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



require __DIR__.'/auth.php';
