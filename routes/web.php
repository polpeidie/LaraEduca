<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified', 'role:3'])
->prefix('admin')  // This adds '/student' to the URL
->name('admin.')  // This adds 'student.' to the route name
->group(function() {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])
    ->name('users');
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])
    ->name('users.delete');
    Route::get('users/create', [UserController::class, 'create'])
    ->name('users.create');
});

Route::middleware(['auth', 'verified', 'role:1'])
->prefix('student')  // This adds '/student' to the URL
->name('student.')  // This adds 'student.' to the route name
->group(function() {
    Route::get('/dashboard', [\App\Http\Controllers\Student\DashboardController::class, 'index'])
    ->name('dashboard');
});

Route::middleware(['auth', 'verified', 'role:2'])
    ->prefix('teacher')
    ->name('teacher.')
    ->group(function() {
        Route::get('/dashboard', [\App\Http\Controllers\Teacher\DashboardController::class, 'index'])
            ->name('dashboard');
        // Other teacher routes can be added here
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
