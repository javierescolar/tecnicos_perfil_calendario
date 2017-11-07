<?php
 

 
 Route::auth();
 
 Route::group(['middleware' => 'auth'], function () {
     
     
     
     Route::get('/', 'HomeController@index');
     Route::get('/home', 'HomeController@index');
     
     Route::resource('technicians', 'TechnicanController');
     Route::resource('profiles', 'ProfileController',['only' => ['index','store','update','destroy','create'] ]);
     Route::get('/caiders/{id}/search_date', 'CaiderController@searchDate');
     Route::get('/caiders/{id}/update_schedule', 'CaiderController@updateSchedule');
     Route::resource('caiders', 'CaiderController');
    
    
     
 });