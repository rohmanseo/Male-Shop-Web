<?php

use Illuminate\Http\Request;

Route::post('auth/register','AuthController@register');
Route::post('auth/login','AuthController@login');
Route::get('produk','ProdukController@showAPI');