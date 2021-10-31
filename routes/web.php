<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
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
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product-detail', [ProductController::class, 'product_detail']);
Route::get('/category-product-detail', [ProductController::class, 'category_product_detail']);
