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

Route::match(['get','post'],'/', function () {
    return view('main');
});

Route::match(['get','post'],'/accountresister', function () {
    return view('accountresister');
});

Route::match(['get','post'],'/complete', function(){
    return view('complete');
});

Route::match(['get','post'],'/newaccount', 'account_resister_Controller@store')->name('newaccount');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
