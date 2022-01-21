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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/search', 'HomeController@search')->name('search');
Route::get('/category/{slug}/{id}', [
    'as' => 'category.product',
    'uses' => 'CategoryController@index'
]);
Route::get('/productdetail/{id}',[
    'as' => 'productdetail',
    'uses' => 'ProductDetailController@index'
]);
Route::get('/cart',[
    'as' => 'cart',
    'uses' => 'CartController@index'
]);
Route::get('/cart/{id}', 'CartController@addToCart')->name('addToCart');
Route::get('/update-cart', 'CartController@updateCart')->name('updateCart');
Route::get('/delete-cart', 'CartController@deleteCart')->name('deleteCart');

