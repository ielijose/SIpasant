<?php

Route::get('/', ['uses' => 'EstudianteController@dashboard']);

Route::get('/registrar-pasantia', ['uses' => 'EstudianteController@registrarPasantia']);