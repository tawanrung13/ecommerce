<?php

use App\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/home', 'ProductsController@index');

Route::get('/', 'ProductsController@index');

Route::post('/{brand}', 'ProductsController@showBrand');

Route::post('/product/{p_id}', 'ProductsController@showProduct');

Route::post('/product/update/{p_id}', 'ProductsController@update');

Route::get('/product/cart', 'ProductsController@cart');
Route::get('/cart', 'ProductsController@cart');

Route::post('/upCart/{id}/{p_id}', 'ProductsController@upCart');
Route::post('/delete/{id}', 'ProductsController@delete');

Route::get('/checkout', 'ProductsController@checkout');
Route::get('/product/checkout', 'ProductsController@checkout');

Route::get('/pay', 'ProductsController@pay');

Route::get('/continue', function(){
    return redirect('/');
});





Route::get('/admin/customer', 'AdminController@customer');

Route::get('/admin/product', 'AdminController@product');

Route::get('/admin/order', 'AdminController@order');

Route::post('/admin/report', 'AdminController@report');
