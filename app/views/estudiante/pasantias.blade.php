@extends('estudiante.layouts.master')

@section('content')

<div id="main-content">
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h2>Pasantías <small> listado completo.</small></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" id="member-finder" class="form-control" placeholder="Filtrar...">
                        </div>
                        
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($pasantias as $pasantia)
                        <div class="col-md-4 member-entry">
                            <div class="row member">
                               
                                <div class="col-xs-12">
                                    <h3 class="m-t-0 member-name"><strong> {{ $pasantia->actividad }} </strong></h3>
                                    <div class="pull-left">
                                        <p><i class="fa fa-envelope-o c-gray-light p-r-10"></i> {{ $pasantia->empresa->empresa }}</p>
                                        <p><i class="fa fa-facebook c-gray-light p-r-10"></i> {{ $pasantia->supervisor_nombre }}</p>
                                    </div>
                                    <div class="pull-right align-right">
                                        <p><i class="fa fa-calendar c-gray-light p-r-10"></i> {{ $pasantia->getsemestre() }}</p>
                                        <p><a href="/pasantia/{{ $pasantia->id}}" class="btn btn-info">Ver</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script src="assets/plugins/quicksearch/jquery.quicksearch.js"></script>
<script src="assets/js/members.js"></script>
@stop