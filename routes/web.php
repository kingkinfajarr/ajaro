<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sales', [SalesController::class, 'index'])
    ->name ('sales');

Route::get('/purchases', [PurchaseController::class, 'index'])
    ->name ('purchases');

// Route::get('/categories', [CategoryController::class, 'index'])
//     ->name ('categories');

// Route::get('/products', [ProductController::class, 'index'])
//     ->name ('products');

// Route::get('/suppliers', [SupplierController::class, 'index'])
//     ->name ('suppliers');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);