<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'show'])->name('home');
Route::get('/product/{product}', [ProductsController::class, 'showProduct'])->name('products.show');
Route::get('/products/{productName}', [ProductsController::class, 'showProductsByName'])->name('productsByName.show');
Route::get('/products/{productName}/{category}', [ProductsController::class, 'showProductsByNameCategory'])->name('productsByNameCategoy.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
