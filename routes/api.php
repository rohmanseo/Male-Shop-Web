<?php

use Illuminate\Http\Request;

// Route::post('auth/register','AuthController@register');
// Route::post('auth/login','AuthController@login');
// Route::post('cart','CartController@index');
// Route::post('addProduk','CartController@addProduk');
// Route::post('addWishlist','WishlistControllerApi@addProduk');
// Route::get('produk','ProdukControllerApi@showProduk');
// Route::get('slideshow','SlideShowApi@index');
// Route::get('showWishlist/{api}','WishlistControllerApi@show');
// Route::get('showCart/{api}','CartController@show');
// Route::get('newArrival','ProdukControllerApi@newArrival');
// Route::get('kategori/{nama}','CategoryControllerApi@show');
// Route::get('search/{query}','SearchControllerApi@index');
// Route::get('getApi/{email}','AuthController@getApi');

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
    Route::get('produk/new', 'API\ProdukController@new');
    Route::resource('produk', 'API\ProdukController');
    Route::get('search/{query}','API\SearchController@index');
    Route::resource('wishlist','API\WishlistController');
    Route::resource('cart','API\CartController');
    Route::get('slideshow','API\SlideshowController@index');
    Route::get('kategori/{id}','API\CategoryController@index');


});