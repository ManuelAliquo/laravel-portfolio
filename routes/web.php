<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('projects', AdminProjectController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// protected routes
Route::middleware(['auth', 'verified', 'admin'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::resource('projects', AdminProjectController::class)->except('show');
    });

require __DIR__ . '/auth.php';
