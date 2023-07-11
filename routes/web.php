<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Livewire\Customer\EntryPage::class, '__invoke']);
Route::get('/welcome', [\App\Http\Livewire\Customer\DashboardPage::class, '__invoke']);


Route::group(['prefix' => 'Admin'], function () {
Route::get('login', [\App\Http\Livewire\Admin\Auth\Login::class, '__invoke']);
Route::get('dashboard', [\App\Http\Livewire\Admin\Dashboard::class, '__invoke']);
Route::group(['prefix' => 'Order'], function () {
Route::get('orders', [\App\Http\Livewire\Admin\Orders\Order::class, '__invoke']);
});
});