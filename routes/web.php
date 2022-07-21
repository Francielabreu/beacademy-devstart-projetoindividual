<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::put('/products/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');