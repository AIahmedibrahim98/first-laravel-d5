<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
Route::prefix("products")->as('products.')->group(function () {
    Route::get('/', fn () => "Show all products")->name('index');
    Route::get('/create', fn () => "create new product")->name('create');
    Route::get('/store', fn () => "store new product")->name('store');
    Route::get('/show/{id}', fn () => "show product details")->name('show');
    Route::get('/edit/{id}', fn () => "Edit product")->name('edit');
    Route::get('/update/{id}', fn () => "update product")->name('update');
    Route::get('/delete/{id}', fn () => "delete product")->name('delete');
});
*/


Route::prefix("products")->as('products.')->group(function () {
    Route::get('/show/{name}', [ProductController::class, 'index']);
});
