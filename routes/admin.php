<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
 
//Route::get('', [HomeController::class, 'index'])->names('admin.home');

Route::resource('', HomeController::class)->middleware('can:admin.home')->names('admin.home');
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->middleware('can:admin.users.index')->names('admin.users');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('products', ProductController::class)->names('admin.products');