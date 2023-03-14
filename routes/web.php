<?php

use App\Http\Controllers\HomeController;
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


Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class  , 'index'])->name('home.index');
    Route::get('/detail', [HomeController::class  , 'detail'])->name('home.detail');
    Route::get('/product' , [HomeController::class , 'product'])->name('home.product');
    Route::get('/cart' , [HomeController::class , 'cart'])->name('home.cart');
});

