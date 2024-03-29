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

Route::get('/admin/category', 'CategoryController@category');
Route::post('/admin/store_category', 'CategoryController@store_category');
Route::get('/admin/category/{id}', 'CategoryController@category');
Route::get('/admin/delete_category/{id}', 'CategoryController@delete_category');
Route::get('/admin/sub_category', 'CategoryController@sub_category');
Route::post('/admin/store_sub_category', 'CategoryController@store_sub_category');
Route::get('/admin/sub_category/{id}', 'CategoryController@sub_category');
Route::get('/admin/delete_sub_category/{id}', 'CategoryController@delete_sub_category');
Route::get('/admin/banner', 'Admin@banner');
Route::post('/admin/banner_update', 'Admin@banner_update');
Route::post('/admin/about_update', 'Admin@about_update');
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



