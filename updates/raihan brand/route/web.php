Route::get('/admin/brands/{id}', 'BrandsController@brands');
Route::get('/admin/brands', 'BrandsController@brands');
Route::get('/admin/brands_edit', 'BrandsController@brands_edit');
Route::post('/admin/brand_insert', 'BrandsController@brand_insert');
Route::post('/admin/brand_update/', 'BrandsController@brand_update');
Route::delete('/brands/delete/{id}', 'BrandsController@brands_destroy');

Route::get('/admin/products', 'ProductsController@products');
Route::post('/admin/store_products', 'ProductsController@store_products');
Route::get('/admin/products/{id}', 'ProductsController@products');
Route::get('/admin/delete_products/{id}', 'ProductsController@delete_products');