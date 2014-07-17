<?php

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
Route::post('login', ['uses' => 'AuthController@login']);
Route::post('register', ['uses' => 'UserController@register']);
Route::get('logout', ['uses' => 'AuthController@logout']);

Route::post('forgot', ['uses' => 'AuthController@forgot']);


// Paneles
Route::group(['before' => 'auth'], function () {

	if(Auth::user())
    require (__DIR__ . '/routes/' . Auth::user()->tipo . '.php');

});

if(!Auth::user())
Route::get('/', function(){
	return Redirect::to('login');
});

App::missing(function($exception)
{
    //return Redirect::to('login');
});
