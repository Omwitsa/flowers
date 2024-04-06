<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User;
use App\Livewire\Client;
use App\Livewire\Brand;
use App\Livewire\RecentOrder;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/recent-orders', RecentOrder::class);
Route::get('/users', User::class);
Route::get('/clients', Client::class);
Route::get('/brands', Brand::class);


require __DIR__.'/auth.php';
