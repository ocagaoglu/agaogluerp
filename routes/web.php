<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WarehouseController;


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

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('packs', PackController::class);
Route::resource('currencies', CurrencyController::class);
Route::resource('product-categories', ProductCategoryController::class);
Route::resource('customers', CustomerController::class);
Route::resource('company', CompanyController::class);
Route::resource('warehouses', WarehouseController::class);



require __DIR__.'/auth.php';

