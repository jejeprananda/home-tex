<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

// Web Page Route
Route::get('/', function () {
    return view('web/home');
});

Route::get('/wishlist', function () {
    return view('web/product/wishlist');
});

Route::get('/checkout', function () {
    return view('web/checkout');
});

// User Module
Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');

Route::get('/users/{user:id}', [UserController::class, 'show'])->name('show')->middleware('auth');

Route::get('/user/create', [UserController::class, 'create'])->name('user/create')->middleware('guest');

Route::post('/user/store', [UserController::class, 'store'])->name('user/store')->middleware('guest');

Route::get('/user/profile', [UserController::class, 'profile'])->name('user/profile')->middleware('auth');

Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('edit')->middleware('auth');

Route::put('/users/{user:id}', [UserController::class, 'update'])->name('update')->middleware('auth');

Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('destroy')->middleware('auth');



// Login Modules

Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');

Route::post('/loginUser', [LoginController::class, 'authenticate'])->name('loginUser')->middleware('guest');

// Logout Module

Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');

// product Modules
Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/products/add', [ProductsController::class, 'add'])->name('addProducts')->middleware('auth');

Route::post('/products/add', [ProductsController::class, 'store'])->name('addProducts')->middleware('auth');
