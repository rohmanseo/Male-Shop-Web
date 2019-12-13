<?php

use Illuminate\Http\Request;

Route::post('auth/register','AuthController@register');
Route::post('auth/login','AuthController@login');
Route::get('produk','ProdukControllerApi@showProduk');
Route::get('newArrival','ProdukControllerApi@newArrival');
Route::get('category/{id}','CategoryControllerApi@show');