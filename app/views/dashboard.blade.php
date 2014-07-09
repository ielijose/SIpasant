@extends('layouts.master')

@section('content')

<div id="main-content">
    <div class="row">
        <div class="col-lg-12">

        	@if(!isset(Auth::user()->estudiante->pasantia))


            <h1> Aun no has registrado alguna pasantia, <a href="/registrar-pasantia" class="">Registra una aquí</a></h1>
            <br><br><br>

            @else

            <h1> si tiene<small>Blank Page</small></h1>
            <br><br><br>

            @endif


        </div>
    </div>
</div>

@stop