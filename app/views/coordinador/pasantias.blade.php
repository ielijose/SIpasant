@extends('coordinador.layouts.master')

@section('css')
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">

@stop

@section('content')

<div id="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue">
                    <h3 class="panel-title"><strong>Listado de </strong> pasantías 
                        @if($status != 'total')
                        {{ $status }}s
                        @endif
                         </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue">
                            @if(count($pasantias))
                            <a href="/pdf/{{ Request::path() }}" target="_blank" class="btn btn-info pull-right"><i class="fa fa-file-o"></i> Generar PDF</a>
                            @endif
                            <table class="table table-hover table-dynamic" id="pendientes">
                                <thead>
                                    <tr>
                                        <th>Nombre y Apellido</th>
                                        <th>CI</th>
                                        <th>Empresa</th>
                                        <th>Proceso</th>
                                        <th>Estado</th>
                                        <th>Ver mas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasantias as $key => $pasantia)
                                    <tr>
                                        <td>{{ $pasantia->estudiante->nombre }} {{ $pasantia->estudiante->apellido }}</td>
                                        <td>{{ $pasantia->estudiante->ci or '' }}</td>
                                        <td>{{ $pasantia->empresa->empresa }}</td>
                                        @if(isset($pasantia->proceso->id))
                                        <td>{{ $pasantia->proceso->getProcesoBadge() }}</td>
                                        @else
                                        <td> - </td>
                                        @endif
                                        <td>{{ $pasantia->getEstadoBadge() }}</td>

                                        <td> <a href="/pasantia/{{ $pasantia->id }}" class="btn btn-primary"> Ver <i class="fa fa-plus"></i></a> </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
<script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="/assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="/assets/plugins/datatables/dataTables.tableTools.js"></script>
<script src="/assets/plugins/datatables/table.editable.js"></script>
<script src="/assets/js/table_dynamic.js"></script>


@stop