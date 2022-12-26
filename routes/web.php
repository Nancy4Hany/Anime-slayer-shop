<?php
use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomizedProductController;
use App\Http\Controllers\AdminController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('order-history');
Route::get('/Products', [ProductsController::class, 'index'])->name('Products');
Route::get('/posts', function () {return view('posts.index');});
Route::get('/custom', function () {return view('details.custom');});
Route::get('/navigation', function () {return view('layouts.navigation');});
//Route::get('/home', function () {return view('home.home');});
Route::get('/product', function () {return view('details.productDetails');});
Route::get('customized-product/save','App\Http\Controllers\CustomizedProductController@save');
// routes/web.php

Route::post('customized-product/save', 'CustomizedProductController@save')->name('customized-product.save');


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
    Route::patch('/profilex', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profiley', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/productx', function () {
    return view('details.productDetails');
});
// Route::group(['middleware' => ['auth','isAdmin']], function () {

//     Route::get('/dashboard', function () {
//        return view('admin.dashboard');
//     });

//  });

//  Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//          return view('admin.index');
//         //  return "this is admin";
//      })->name('dashboard');
//  });

require __DIR__.'/auth.php';

Route::get('view_category', [AdminController::class, 'view_category']);
Route::get('view_product', [AdminController::class, 'view_product']);
Route::post('add_product', [AdminController::class, 'add_product']);
Route::post('add_category', [AdminController::class, 'add_category']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category']);
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
// Route::get('/cart', function() {
//     return view('cart');
// }) ->name('cart');

// Route::get('/order-history', function() {
//     return view('order-history');
// }) ->name('order-history');

Route::get('/profilez', function() {
    return view('profile');
}) ->name('profile');

// Route::get('/home', function() {
//     return view('home');
// }) ->name('home');

// Route::get('/Products', function() {
//     return view('Products');
// }) ->name('Products');

