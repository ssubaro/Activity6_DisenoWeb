<?php

use Illuminate\Support\Facades\Route;
//añadido 
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//
Route::get('/', function () {
    return view('welcome');
});
