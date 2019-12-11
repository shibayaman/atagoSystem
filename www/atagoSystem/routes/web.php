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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/PurchaseHistory', function () {
    return view('PurchaseHistory');
});

Route::get('/foo', 'PurchaseHistoryController@get');

Route::get('/purchase/cart', 'PurchaseController@showCart');

Route::get('/purchase/info-form', 'PurchaseController@showForm');

Route::get('/puchase/info-confirm', 'PurchaseController@showConfirm');

Route::get('/purchase/completed', 'PurchaseController@showCompleted');

Route::get('/purchase/api/cart', 'PurchaseController@getCart');

Route::post('/purchase/api/cart', 'PurchaseController@updateCart');

Route::get('/purchase/api/order', 'PurchaseController@getOrder');

Route::get('/purchase/api/order-detail', 'PurchaseController@getDetail');
