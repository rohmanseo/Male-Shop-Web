<?php

// Route::resource('slideshow','SlideshowController');
// Route::resource('produk','ProdukController');
// Route::resource('user','UserController');
// Route::resource('order','OrderController');
// Route::resource('kategori','KategoriController');
// Route::resource('warna','WarnaController');
// Route::resource('ukuran','UkuranController');
// Route::get('/user/{id}/profil','UserController@profil');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
