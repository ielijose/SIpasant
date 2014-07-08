<?php

Route::get('/', ['before' => 'auth', 'uses' => 'HomeController@showWelcome']);

Route::get('login', ['uses' => 'AuthController@showLogin']);
Route::post('login', ['uses' => 'AuthController@login']);
Route::post('register', ['uses' => 'UserController@register']);

Route::post('register', function()
{
	$user = new User(Input::all());
	if ($user->save())
	{		
		return Redirect::to('/panel/');
	}

	return Redirect::back()->withInput()->withErrors($user->getErrors());

});

