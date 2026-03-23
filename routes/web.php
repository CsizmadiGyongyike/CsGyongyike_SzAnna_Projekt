<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layouts.app');
})->name("welcome");
Route::get('/rolunk', function () {
    return view('pages.rolunk');
})->name('pages.rolunk');
Route::get('/kapcsolat', function () {
    return view('pages.kapcsolat');
})->name('pages.kapcsolat');



Route::resource("/category", CategoryController::class);
Route::resource("/order", OrderController::class);
Route::resource("/orderItem", OrderItemController::class);
Route::resource("/product", ProductController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('cart')->name('cart.')->group(function() {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/', [CartController::class, 'store'])->name('store');
    Route::patch('/{id}', [CartController::class, 'update'])->name('update');
    Route::delete('/{id}', [CartController::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource("category", CategoryController::class);
    Route::resource("order", OrderController::class);
    Route::resource("orderItem", OrderItemController::class);
    Route::resource("product", ProductController::class)->except(['index']);
});

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])
    ->name('cart.checkout')
    ->middleware('auth');
