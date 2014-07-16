@extends('coordinador.layouts.master')

@section('css')
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">

@stop

@section('content')

<div id="main-content">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue">
                    <h3 class="panel-title"><strong>Configuración de semestre</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Semestre</th>
                                        <th>Descripción</th>
                                        <th>Activar</th>
                                        <th>Fechas importantes</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semestres as $key => $semestre)
                                    <tr>
                                        <td>{{ $semestre->id }}</td>
                                        <td>{{ $semestre->semestre }}</td>
                                        <td>{{ $semestre->descripcion }}</td>
                                        <td> 
                                            @if($semestre->activo != 1)
                                            <a href="/semestre/action/{{$semestre->id}}/activar" class="btn btn-primary">Activar <i class="fa fa-check"></i></a> 
                                            @else
                                            <button class="btn btn-success">Activado <i class="fa fa-check"></i></button>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="/calendario/semestre/{{ $semestre->id }}" class="btn btn-danger">Modificar <i class="fa fa-calendar"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Nuevo Semestre</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                    <form id="add-semestre" class="form-horizontal" parsley-validate action="/semestre" method="POST">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Semestre <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" parsley-luhn="true" name="semestre" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Descripción <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" parsley-luhn="true" name="descripcion" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <div class="pull-right">
                                                <button class="btn btn-success" onclick="javascript:$('#add-semestre').parsley('validate');">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

@stop

@section('javascript')

<script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/plugins/datatables/dataTables.tableTools.js"></script>
<script src="assets/plugins/datatables/table.editable.js"></script>
<script src="assets/js/table_dynamic.js"></script>

    <script src="assets/plugins/parsley/parsley.min.js"></script>


@stop