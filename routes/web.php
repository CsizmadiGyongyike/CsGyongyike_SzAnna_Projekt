<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts.app');
})->name("welcome");
Route::get('/login', function () { 
    return view('auth.login'); 
})->name('auth.login');
Route::get('/register', function () { 
    return view('auth.register'); 
})->name('auth.register');
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
