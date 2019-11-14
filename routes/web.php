<?php

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

Route::get('lang/{locale}', 'FrontController@lang');
Route::get('/product/{id}', 'FrontController@product');

Route::get('/admin/banner', 'Admin@banner');
Route::get('/admin/about', 'Admin@about');
Route::get('/admin/service', 'Admin@service');
Route::get('/admin/middle', 'Admin@middle');
Route::get('/admin/latest', 'Admin@latest');
Route::get('/admin/featured', 'Admin@featured');
Route::get('/admin/others', 'Admin@others');

Route::get('/shop', 'FrontController@shop');
Route::get('/contact', 'FrontController@contact');
Route::get('/about', 'FrontController@about');
Route::get('/source', 'FrontController@source');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Auth::routes();



