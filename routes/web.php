<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/users', User::class);

require __DIR__.'/auth.php';
