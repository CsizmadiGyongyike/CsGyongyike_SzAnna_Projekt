<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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
