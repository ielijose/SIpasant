<?php

Route::get('/', ['uses' => 'EstudianteController@dashboard']);

Route::get('/registrar-pasantia', ['before'=> 'canRegister', 'uses' => 'EstudianteController@registrarPasantia']);

Route::post('/registrar', ['uses' => 'EstudianteController@registrar']);

Route::get('/generar-carta', ['before'=> 'canGenerate', 'uses' => 'EstudianteController@generarCarta']);


Route::get('/pasantias', ['uses' => 'EstudianteController@pasantias']);
Route::get('/pasantia/{id}', ['uses' => 'EstudianteController@pasantia']);

Route::get('/documentos', ['uses' => 'EstudianteController@documentos']);

Route::get('/calendario', ['uses' => 'EstudianteController@calendario']);

Route::get('eventos/semestre/{id}', ['uses' => 'EstudianteController@eventos_semestre']);


View::composer('estudiante.pasantia', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});
View::composer('estudiante.documentos', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});
View::composer('estudiante.layouts.sidebar', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});