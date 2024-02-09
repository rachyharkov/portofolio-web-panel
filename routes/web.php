<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\{AchievementController, ProjectController};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', fn () => view('profile'))->name('profile');

    Route::resource('achievements', AchievementController::class);
    Route::resource('projects', ProjectController::class);
});
