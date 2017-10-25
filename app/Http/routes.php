<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::auth();

Route::group(['middleware' => 'auth'], function () {
    
    
    
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    
    Route::resource('technicians', 'TechnicanController');
    Route::resource('profiles', 'ProfileController',['only' => ['index','store','update','destroy','create'] ]);
    Route::get('/caiders/{id}/search_date', 'CaiderController@searchDate');
    Route::resource('caiders', 'CaiderController');
   
   
    
});
