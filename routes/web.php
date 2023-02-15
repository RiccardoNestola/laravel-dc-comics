<?php

use App\Http\Controllers\Admin\ProductController as ProductController;
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
    return view('Guest/home');
}) -> name("home");

/* Route::get('admin/product', [ProductController::class, "index"])->name("admin.product.index");
Route::get('admin/product/create', [ProductController::class, "create"])->name("admin.product.create");
Route::get('admin/product/{id}', [ProductController::class, "show"])->name("admin.product.show");
Route::post('admin/product', [ProductController::class, "store"])->name("admin.product.store"); */

Route::resource("admin/product", ProductController::class);