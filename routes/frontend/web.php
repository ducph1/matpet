<?php

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

Route::get('/', 'frontend\HomeController@index')->name('home');
Route::get('/login', 'frontend\HomeController@loginUser')->name('frontend.login');
Route::post('/search', 'frontend\HomeController@search')->name('search');
Route::get('/category/{slug}/{id}', [
    'as' => 'category.product',
    'uses' => 'frontend\CategoryController@index'
]);
Route::get('/productdetail/{id}', [
    'as' => 'productdetail',
    'uses' => 'frontend\ProductDetailController@index'
]);
Route::get('/cart', [
    'as' => 'cart',
    'uses' => 'frontend\CartController@index'
]);
Route::get('/cart/{id}', 'frontend\CartController@addToCart')->name('addToCart');
Route::get('/update-cart', 'frontend\CartController@updateCart')->name('updateCart');
Route::get('/delete-cart', 'frontend\CartController@deleteCart')->name('deleteCart');
