<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ProductController
};






require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
    Route::post('/client', [UserController::class, 'store'])->name('users.store');
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
    Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');


Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::put('/products/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
});