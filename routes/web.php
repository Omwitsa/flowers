<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserComponent;
use App\Livewire\ClientComponent;
use App\Livewire\BrandComponent;
use App\Livewire\Orders;
use App\Livewire\SingleBox;
use App\Livewire\NewUser;
use App\Livewire\VarietyComponent;
use App\Livewire\NewVariety;
use App\Livewire\VarietyRangeComponent;
use App\Livewire\NewVarietyRange;
use App\Livewire\NewBrand;
use App\Livewire\NewClient;
use App\Livewire\DropoffList;
use App\Livewire\NewDropoff;
use App\Livewire\ClientCategoryList;
use App\Livewire\NewClientCategory;
use App\Livewire\RegionList;
use App\Livewire\NewRegion;
use App\Livewire\PriceList;
use App\Livewire\NewPrice;
use App\Livewire\PackRateList;
use App\Livewire\NewPackRate;
use App\Livewire\OrderSummery;
use App\Livewire\MixedBox;
use App\Http\Controllers\HomeController;

// Route::view('/', 'welcome');

// Route::get('/', 'HomeController@index');
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::view('/foreign-dashboard', 'foreign-dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/orders', Orders::class);
Route::get('/single-box', SingleBox::class);
Route::get('/mixed-box', MixedBox::class);
Route::get('/users', UserComponent::class);
Route::get('/new-user', NewUser::class);
Route::get('/clients', ClientComponent::class);
Route::get('/new-client', NewClient::class);
Route::get('/brands', BrandComponent::class);
Route::get('/new-brand', NewBrand::class);
Route::get('/varieties', VarietyComponent::class);
Route::get('/new-variety', NewVariety::class);
Route::get('/variety-range', VarietyRangeComponent::class);
Route::get('/new-variety-range', NewVarietyRange::class);
Route::get('/dropoffs', DropoffList::class);
Route::get('/new-dropoff', NewDropoff::class);
Route::get('/client-categories', ClientCategoryList::class);
Route::get('/new-client-category', NewClientCategory::class);
Route::get('/regions', RegionList::class);
Route::get('/new-region', NewRegion::class);
Route::get('/prices', PriceList::class);
Route::get('/new-price', NewPrice::class);
Route::get('/packrates', PackRateList::class);
Route::get('/new-packrate', NewPackRate::class);
Route::get('/order-summary', OrderSummery::class);

require __DIR__.'/auth.php';
