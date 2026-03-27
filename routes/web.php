<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Models\User;
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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::middleware(['auth'])->group(function () {

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    Route::resource("category", CategoryController::class);
    Route::resource("order", OrderController::class);
    Route::resource("orderItem", OrderItemController::class);
    Route::resource("product", ProductController::class)->except(['index']);

    Route::post('/kapcsolat', [ContactController::class, 'store'])->name('contact.store');
});

/*Route::get('/admin-fix', function () {
    $user = User::where('email', 'admin@example.com')->first();

    if ($user) {
        $user->is_admin = true;
        $user->save();
        return "Siker! Az " . $user->email . " felhasználó mostantól Admin.";
    }

    return "Hiba: Nem található ilyen email cím az adatbázisban.";
});*/
