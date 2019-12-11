<?php
Route::get('/', 'DashboardController@index');
Route::resource('slideshow','SlideshowController');
Route::resource('produk','ProdukController');
Route::resource('user','UserController');
Route::resource('order','OrderController');
Route::resource('kategori','KategoriController');
