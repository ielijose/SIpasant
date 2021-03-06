<?php

Route::get('/', ['uses' => 'CoordinadorController@dashboard']);

/* WEB */
Route::get('pasantias/{status?}', ['uses' => 'CoordinadorController@pasantias']);
Route::get('arbitrar', ['uses' => 'CoordinadorController@arbitrar']);
/* PDF */
Route::get('pdf/pasantias/{status?}', ['uses' => 'CoordinadorController@pdf_pasantias']);
Route::get('pdf/arbitrar', ['uses' => 'CoordinadorController@pdf_arbitrar']);


Route::get('pasantia/{id}', ['uses' => 'CoordinadorController@pasantia']);

Route::get('pasantia/action/{action}/{id}', ['uses' => 'CoordinadorController@action_pasantia']);

Route::get('semestres', ['uses' => 'CoordinadorController@semestres']);

Route::get('semestre/action/{id}/activar', ['uses' => 'CoordinadorController@activar_semestre']);

Route::post('/semestre', ['uses' => 'CoordinadorController@add_semestre']);

Route::get('calendario/semestre/{id}', ['uses' => 'CoordinadorController@calendario_semestre']);

Route::get('eventos/semestre/{id}', ['uses' => 'CoordinadorController@eventos_semestre']);
Route::post('evento/add/{id}', ['uses' => 'CoordinadorController@evento_add']);
Route::put('evento/edit/{id}', ['uses' => 'CoordinadorController@evento_edit']);
Route::delete('evento/delete/{id}', ['uses' => 'CoordinadorController@evento_delete']);
Route::put('evento/drop/{id}', ['uses' => 'CoordinadorController@evento_drop']);


Route::get('pasantia/{id}/{status}', ['uses' => 'CoordinadorController@change_status']);
