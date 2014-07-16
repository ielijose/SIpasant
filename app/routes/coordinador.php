<?php

Route::get('/', ['uses' => 'CoordinadorController@dashboard']);

Route::get('pasantias/{status?}', ['uses' => 'CoordinadorController@pasantias']);

Route::get('pasantia/{id}', ['uses' => 'CoordinadorController@pasantia']);

Route::get('pasantia/action/{action}/{id}', ['uses' => 'CoordinadorController@action_pasantia']);

Route::post('chart/stats', ['uses' => 'CoordinadorController@charts']);

Route::get('semestres', ['uses' => 'CoordinadorController@semestres']);

Route::get('semestre/action/{id}/activar', ['uses' => 'CoordinadorController@activar_semestre']);

Route::post('/semestre', ['uses' => 'CoordinadorController@add_semestre']);

Route::get('calendario/semestre/{id}', ['uses' => 'CoordinadorController@calendario_semestre']);
