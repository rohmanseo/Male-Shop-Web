<?php

use Illuminate\Http\Request;

Route::post('auth/register','AuthController@register');
Route::post('auth/login','AuthController@login');
Route::post('cart','CartController@index');
Route::post('addProduk','CartController@addProduk');
Route::get('produk','ProdukControllerApi@showProduk');
Route::get('slideshow','SlideShowApi@index');
Route::get('newArrival','ProdukControllerApi@newArrival');
Route::get('kategori/{nama}','CategoryControllerApi@show');
Route::get('search/{query}','SearchControllerApi@index');