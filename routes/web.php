<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User;
use App\Livewire\Client;
use App\Livewire\Brand;
use App\Livewire\RecentOrder;
use App\Http\Controllers\HomeController;

// Route::view('/', 'welcome');

// Route::get('/', 'HomeController@index');
Route::get('/', [HomeController::class, 'index']);

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
