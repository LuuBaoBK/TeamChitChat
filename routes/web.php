<?php

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

//Front not require login
Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'AuthenticateController@getHomePage')
        ->name('homepage');
    Route::post('/login', 'AuthenticateController@postLogin')
        ->name('login');
});

//Front require login
Route::group(['namespace' => 'Front'], function() {
	Route::get('/home',function(){
		return view('welcome'); 
	})->name('welcome');
});

