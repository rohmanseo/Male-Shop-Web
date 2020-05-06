<?php

use Illuminate\Http\Request;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'API\AuthController@login');
    Route::post('register', 'API\AuthController@register');
    Route::put('update', 'API\AuthController@update');
    Route::post('logout', 'API\AuthController@logout');
    Route::post('refresh', 'API\AuthController@refresh');
    Route::post('me', 'API\AuthController@me');

});

Route::group([

    'middleware' => 'api',

], function ($router) {
    Route::get('order','API\OrderController@index');
    Route::post('order','API\OrderController@order');
    Route::get('produk/new', 'API\ProdukController@new');
    Route::resource('produk', 'API\ProdukController');
    Route::get('search/{query}','API\SearchController@index');
    Route::resource('wishlist','API\WishlistController');
    Route::resource('cart','API\CartController');
    Route::get('slideshow','API\SlideshowController@index');
    Route::get('kategori/{id}','API\CategoryController@index');
});