<?php

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
Route::post('login', ['uses' => 'AuthController@login']);
Route::post('register', ['uses' => 'UserController@register']);
Route::get('logout', ['uses' => 'AuthController@logout']);

// Paneles
Route::group(['before' => 'auth'], function () {

	if(Auth::user())
    require (__DIR__ . '/routes/' . Auth::user()->tipo . '.php');

});

if(!Auth::user())
Route::get('/', function(){
	return Redirect::to('login');
});
