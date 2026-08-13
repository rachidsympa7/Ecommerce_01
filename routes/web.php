<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('home');
});
Route::get('products', [ProductController::class, 'index'])->name('products.index');
route::get('products/{product}',[ProductController::class,'show'])->name('products.show');
