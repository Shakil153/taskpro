<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('task', 'task')
    ->middleware(['auth', 'verified'])
    ->name('task');

Route::view('task-details', 'taskDetails')
    ->middleware(['auth', 'verified'])
    ->name('task.details');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
