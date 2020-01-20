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

    if(Auth::check()){
        $user = \Auth::user()->username;
        $ifLogin = "ログアウト";
        $link = "/logout";
        return view('main',compact("user","ifLogin","link"));
    }else {
        $ifLogin = "ログイン";
        $link = "/accountlogin";
        $user = "";
        return view('main',compact("user","ifLogin","link"));

    }
});

Route::get('/accountedit', function () {

    $user = \Auth::user();
    return view('accountedit',compact("user"));
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
});


Route::get('/logout','account_resister_Controller@getLogout');

Auth::routes(['register' => false,'confirm' =>false,'verify' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
