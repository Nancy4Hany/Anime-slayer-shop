<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomizedProductController;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/posts', function () {return view('posts.index');});
Route::get('/custom', function () {return view('details.custom');});
Route::get('/navigation', function () {return view('layouts.navigation');});
Route::get('/home', function () {return view('home.home');});
Route::get('/product', function () {return view('details.productDetails');});
Route::post('customized-product/save', 'CustomizedProductController@save')->name('customized-product.save');
// routes/web.php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/cart', function() {
    return view('cart');
}) ->name('cart');

Route::get('/order-history', function() {
    return view('order-history');
}) ->name('order-history');

Route::get('/profile', function() {
    return view('profile');
}) ->name('profile');

