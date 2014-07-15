<?php

Route::get('/', ['uses' => 'CoordinadorController@dashboard']);

Route::get('pasantias/{status?}', ['uses' => 'CoordinadorController@pasantias']);

Route::get('pasantia/{id}', ['uses' => 'CoordinadorController@pasantia']);

Route::get('pasantia/action/{action}/{id}', ['uses' => 'CoordinadorController@action_pasantia']);

