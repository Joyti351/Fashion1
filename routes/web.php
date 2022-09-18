<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\AdminController;
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
Route::get('/user',[HomeController::class,'home']);
Route::get('/index.html',[HomeController::class,'index']);
Route::get('/shop.html',[HomeController::class,'shop']);
Route::get('/blog.html',[HomeController::class,'blog']);
Route::get('/contact.html',[HomeController::class,'contact']);
//usersite.page
Route::get('/about.html',[HomeController::class,'about']);
Route::get('/shop-details.html',[HomeController::class,'ShopDetails']);
Route::get('/shopping-cart.html',[HomeController::class,'ShoppingCart']);
Route::get('/checkout.html',[HomeController::class,'checkout']);
Route::get('/blog-details.html',[HomeController::class,'BlogDetails']);
//Route::get('/test',[HomeController::class,'test']);


//adminsite
Route::get('/admin',[AdminController::class,'home']);
Route::get('/slider-link',[AdminController::class,'create']);
Route::post('/slider-store',[AdminController::class,'store']);
Route::get('/slider-index',[AdminController::class,'index']);
Route::get('/slider-view/{id}',[AdminController::class,'view']);
Route::get('/slider-edit/{id}',[AdminController::class,'edit']);
Route::get('/slider-delete/{id}',[AdminController::class,'delete']);
