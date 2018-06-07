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


Route::get('/find', 'SearchController@search');
Route::get('/filter', 'SearchController@filter');

// Route::get('/{search}{type?}{location?}', function ($search=null, $type=null, $location=null) {
//     // return view('index');
//  //    return view('used');
//     return $search.$type;
 
//  });

Route::get('/post-ad', 'AdController@index');
Route::post('/post-ad', 'AdController@postAd');

Route::get('/used-car', function () {
    return view('used');
});


Route::get('/details{id}', function($id){
    $single = App\Vehicle::where('id', $id)->first();

    return view('details')->with('vehicle', $single);
})->name('details');

Route::get('/sold{id}', 'AdController@sold' )->name('sold');


Route::get('/my-ads',  'AdController@myAds');

Route::get('/new-car', function () {
    return view('new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
