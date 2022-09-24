<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\AdminController;
use App\http\controllers\BannerController;
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
Route::get('/banner',[HomeController::class,'banner']);

Route::get('/index.html',[HomeController::class,'index']);
Route::get('/shop.html',[HomeController::class,'shop']);
Route::get('/blog.html',[HomeController::class,'blog']);
Route::get('/contact.html',[HomeController::class,'contact']);
Route::get('/sing-in',[HomeController::class,'sing_in']);
//usersite.page
Route::get('/about.html',[HomeController::class,'about']);
Route::get('/shop-details.html',[HomeController::class,'ShopDetails']);
Route::get('/shopping-cart.html',[HomeController::class,'ShoppingCart']);
Route::get('/checkout.html',[HomeController::class,'checkout']);
Route::get('/blog-details.html',[HomeController::class,'BlogDetails']);
//Route::get('/test',[HomeController::class,'test']);


//adminsite
Route::get('/admin',[AdminController::class,'home']);
Route::get('/slider-index',[AdminController::class,'index']);
Route::get('/slider-create',[AdminController::class,'create']);
Route::post('/slider-store',[AdminController::class,'store']);
Route::get('/slider-view/{id}',[AdminController::class,'view']);
Route::get('/slider-edit/{id}',[AdminController::class,'edit']);
Route::post('/slider-update',[AdminController::class,'update']);
Route::get('/slider-delete/{id}',[AdminController::class,'delete']);

//BannerSite
Route::get('/banner-create',[BannerController::class,'BannerForm']);
Route::post('/banner-store',[BannerController::class,'BannerStore']);
Route::get('/banner-index',[BannerController::class,'BannerIndex']);
Route::get('/banner-view/{id}',[BannerController::class,'BannerView']);
Route::get('/banner-edit/{id}',[BannerController::class,'BannerEdit']);
Route::get('/banner-delete/{id}',[BannerController::class,'BannerDelete']);
Route::post('/banner-update',[BannerController::class,'BannerUpdate']);


