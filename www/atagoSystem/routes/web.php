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

Route::get('/','account_resister_Controller@LoginCheck');

Route::get('/emplogin',function(){
    return view('emplogin');
});


Route::get('/accountedit',function(){
    $user = \Auth::user();
    return view('accountedit',compact('user'));
})->middleware('auth');

Route::get('/editdecision',function(){
    $user = \Auth::user();
    return view('editdecision',compact('user'));
})->middleware('auth');


Route::get('/toiawase',function(){
    return view('toiawase');
});

Route::get('/accountresister', function () {
    return view('accountresister');
});

Route::get('/complete', function(){
    return view('complete');
});

Route::post('/newaccount', 'account_resister_Controller@store')->name('newaccount');

Route::get('/accountlogin', function(){
    return view('accountlogin');
})->name('accountlogin');

Route::get('/logout', 'account_resister_Controller@getLogout');

Auth::routes(['register' => false,'confirm' =>false,'verify' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/PurchaseHistory', function () {
    return view('PurchaseHistory');
});

Route::resource('items', 'ItemController')->only(['show']);

Route::get('/foo', 'PurchaseHistoryController@get');

Route::get('/purchase/cart', 'PurchaseController@showCart');

Route::get('/purchase/info-form', 'PurchaseController@showForm');

Route::get('/purchase/info-confirm', 'PurchaseController@showConfirm');

Route::get('/purchase/completed', 'PurchaseController@showCompleted');

Route::get('/purchase/api/cart', 'PurchaseController@getCart');

Route::post('/purchase/cart', 'PurchaseController@addCart');

Route::post('/purchase/api/cart', 'PurchaseController@updateCart');

Route::get('/purchase/api/order', 'PurchaseController@getOrder');

Route::get('/purchase/api/order-detail', 'PurchaseController@getDetail');
