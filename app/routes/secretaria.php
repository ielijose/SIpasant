<?php

Route::get('/', ['uses' => 'SecretariaController@dashboard']);

Route::get('pasantias/{status?}', ['uses' => 'SecretariaController@pasantias']);

Route::get('pasantia/{id}', ['uses' => 'SecretariaController@pasantia']);

Route::get('pasantia/step/{step}/{id}', ['uses' => 'SecretariaController@step']);