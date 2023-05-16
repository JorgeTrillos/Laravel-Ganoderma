<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});
Auth::routes();
Route::get('/', [App\Http\Controllers\ProductController::class, 'principal'])->name('home');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'principal'])->name('home');
Route::get('/showselectprodu/{id}', [App\Http\Controllers\ProductController::class, 'showselectprodu'])->name('index.product');
Route::post('/add', [App\Http\Controllers\ProductController::class, 'add'])->middleware('auth')->name('cart.add');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cart'])->middleware('auth')->name('cart.index');
Route::post('/update',  [App\Http\Controllers\ProductController::class, 'updatex'])->middleware('auth')->name('cart.updatex');
Route::post('/remove', [App\Http\Controllers\ProductController::class, 'remove'])->middleware('auth')->name('cart.remove');
Route::post('/clear',  [App\Http\Controllers\ProductController::class, 'clear'])->middleware('auth')->name('cart.clear');
