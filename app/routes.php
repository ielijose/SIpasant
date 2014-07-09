<?php

Route::get('/', ['before' => 'auth', 'uses' => 'HomeController@dashboard']);

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
Route::post('login', ['uses' => 'AuthController@login']);
Route::post('register', ['uses' => 'UserController@register']);

Route::get('logout', ['uses' => 'AuthController@logout']);


Route::get('/registrar-pasantia', ['before' => 'auth', 'uses' => 'HomeController@registrarPasantia']);
