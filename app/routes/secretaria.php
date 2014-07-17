<?php

Route::get('/', ['uses' => 'SecretariaController@dashboard']);

Route::get('actualizar', ['uses' => 'SecretariaController@actualizar']);

Route::get('pasantia/{id}', ['uses' => 'SecretariaController@pasantia']);

Route::get('pasantia/step/{step}/{id}', ['uses' => 'SecretariaController@step']);