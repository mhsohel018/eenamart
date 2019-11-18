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
Route::get('/admin/sub_category/{id}', 'CategoryController@sub_category');
Route::get('/admin/delete_sub_category/{id}', 'CategoryController@delete_sub_category');
Route::get('/admin/products/{id}', 'ProductsController@products');
Route::get('/admin/delete_products/{id}', 'ProductsController@delete_products');
Route::delete('/brands/delete/{id}', 'BrandsController@brands_destroy');
Route::get('/admin/brands/{id}', 'BrandsController@brands');
Route::get('/admin/latest_product/{id}', 'Admin@latest_product');
Route::get('/admin/category/{id}', 'CategoryController@category');
Route::get('/admin/delete_category/{id}', 'CategoryController@delete_category');

Route::delete('/source/delete/{id}', 'SourceController@source_destroy');
Route::get('/admin/source/{id}', 'SourceController@source');

Route::post('/admin/sourec_insert', 'SourceController@sourec_insert');
Route::get('/admin/source_edit', 'SourceController@source_edit');
Route::get('/admin/source', 'SourceController@source');

Route::get('/admin/brands', 'BrandsController@brands');
Route::get('/admin/brands_edit', 'BrandsController@brands_edit');
Route::post('/admin/brand_insert', 'BrandsController@brand_insert');
Route::post('/admin/brand_update/', 'BrandsController@brand_update');


Route::get('/admin/products', 'ProductsController@products');
Route::post('/admin/store_products', 'ProductsController@store_products');


Route::get('/admin/about_entry', 'AboutController@index');
Route::post('/admin/about_entry', 'AboutController@store');
Route::get('/admin/category', 'CategoryController@category');
Route::post('/admin/store_category', 'CategoryController@store_category');

Route::get('/admin/sub_category', 'CategoryController@sub_category');
Route::post('/admin/store_sub_category', 'CategoryController@store_sub_category');
Route::get('/admin/settings', 'SettingsController@settings');
Route::post('/admin/settings_update', 'SettingsController@settings_update');
Route::post('/admin/others_update', 'Admin@others_update');
Route::post('/admin/latest_update', 'Admin@latest_update');
Route::post('/admin/productmsg_update', 'Admin@productmsg_update');
Route::post('/admin/subscribemsg_update', 'Admin@subscribemsg_update');
Route::get('/admin/banner', 'Admin@banner');
Route::post('/admin/banner_update', 'Admin@banner_update');
Route::post('/admin/about_update', 'Admin@about_update');
Route::get('/admin/about', 'Admin@about');
Route::post('/admin/service_update', 'Admin@service_update');
Route::get('/admin/service', 'Admin@service');
Route::post('/admin/middle_update', 'Admin@middle_update');
Route::get('/admin/middle', 'Admin@middle');
Route::get('/admin/latest', 'Admin@latest');
Route::post('/admin/get_subCategory', 'Admin@get_subCategory');
Route::post('/admin/get_product', 'Admin@get_product');
Route::post('/admin/add_latest_product', 'Admin@add_latest_product');
Route::get('/admin/latest_product', 'Admin@latest_product');
Route::get('/admin/mail', 'Admin@mail');

Route::post('/admin/featured_update', 'Admin@featured_update');
Route::get('/admin/featured', 'Admin@featured');
Route::get('/admin/others', 'Admin@others');

Route::get('/shop/{id}', 'FrontController@shop');
Route::get('/shop', 'FrontController@shop');
Route::get('/contact', 'FrontController@contact');
Route::get('/about', 'FrontController@about');
Route::get('/source', 'FrontController@source');
Route::post('/send', 'ContactController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Auth::routes();



