<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ProductController;
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
    Route::get('/blog' , [HomeController::class , 'blog'])->name('home.blog');
    Route::get('/about' , [HomeController::class , 'about'])->name('home.about');
    Route::get('/contact' , [HomeController::class , 'contact'])->name('home.contact');
});


Route::group(['prefix'=>'admin'] , function() {
    Route::get('/' , [AdminController::class , 'index'])->name('admin.index');

    Route::resources([
        'category' =>CategoryController::class,
        'product' =>ProductController::class,
        'product_img' => ImagesController::class,
        'attribute' => AttributeController::class,
    ]);
    Route::post('add_sale' , [ProductController::class , 'createSale'])->name('product.sale');


});