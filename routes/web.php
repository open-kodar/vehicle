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
    return view('index');
});

Route::get('/post-ad', 'AdController@index');
Route::post('/post-ad', 'AdController@postAd');

Route::get('/used-car', function () {
    return view('used');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/my-ads', function () {
    return view('myads');
});

Route::get('/new-car', function () {
    return view('new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
