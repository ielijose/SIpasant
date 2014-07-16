<?php

Route::get('/', ['uses' => 'EstudianteController@dashboard']);

Route::get('/registrar-pasantia', ['before'=> 'canRegister', 'uses' => 'EstudianteController@registrarPasantia']);

Route::post('/registrar', ['uses' => 'EstudianteController@registrar']);

Route::get('/generar-carta', ['before'=> 'canGenerate', 'uses' => 'EstudianteController@generarCarta']);