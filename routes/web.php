<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
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

    Route::get('/register' , [HomeController::class , 'register'])->name('home.register');
    Route::post('/register' , [HomeController::class , 'check_register']);
    Route::get('/login' , [HomeController::class , 'login'])->name('home.login');
    Route::post('/login' , [HomeController::class , 'check_login'])->name('home.check_login');

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class  , 'index'])->name('home.index');
    Route::get('/detail', [HomeController::class  , 'detail'])->name('home.detail');
    Route::get('/product' , [HomeController::class , 'product'])->name('home.product');
    Route::get('/cart' , [HomeController::class , 'cart'])->name('home.cart')->middleware('cus');
    Route::get('/blog' , [HomeController::class , 'blog'])->name('home.blog');
    Route::get('/about' , [HomeController::class , 'about'])->name('home.about');
    Route::get('/contact' , [HomeController::class , 'contact'])->name('home.contact');


    
    Route::get('/logout' , [HomeController::class , 'logout'])->name('home.logout');
    
});

Route::group(['prefix' => 'cart'] , function() {
    Route::get('/view', [CartController::class, 'view'])->name('cart.view');
});

Route::get('/account.april/register',[AdminController::class, 'create'])->name('admin.register');
Route::post('account.april/register', [AdminController::class, 'store']);

Route::get('/account.april/login' , [AdminController::class , 'login'])->name('admin.login');
Route::post('/account.april/login' , [AdminController::class , 'check_login']);




Route::group(['prefix'=>'admin' ,'middleware'=>'auth'] , function() {
    Route::get('/' , [AdminController::class , 'index'])->name('admin.index');
    Route::get('/account.april/logout' , [AdminController::class , 'logout'])->name('admin.logout');

    Route::resources([
        'category' =>CategoryController::class,
        'product' =>ProductController::class,
        'product_img' => ImagesController::class,
        'attribute' => AttributeController::class,
    ]);

    
    Route::post('add_sale' , [ProductController::class , 'createSale'])->name('product.sale');
    Route::delete('/products' , [ProductController::class , 'deleteSelected'])->name('product.delete');

  


});