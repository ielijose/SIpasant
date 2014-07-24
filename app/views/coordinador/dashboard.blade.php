@extends('coordinador.layouts.master')

@section('css')

<link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">

@stop

@section('content')

<div id="main-content" class="dashboard">

    <div class="row">
        <div class="col-md-6">

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-9 panel-stat">
                    <div class="panel-body bg-dark">
                        <div class="icon"><i class="fa fa-archive"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['total'] }}</div>
                                <a href="/pasantias/total"><h3>Pasantías &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-body bg-blue">
                        <div class="icon"><i class="fa fa-question"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['pendientes'] }}</div>
                                <a href="/pasantias/pendiente"><h3>Pasantías pendientes</h3></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-body bg-green">
                        <div class="icon"><i class="fa fa-check"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['aceptados'] }}</div>
                                <a href="/pasantias/aceptado"><h3>Pasantías aceptadas</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-0 panel-stat">
                    <div class="panel-body bg-red">
                        <div class="icon"><i class="fa fa-ban"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['rechazados'] }}</div>
                                <a href="/pasantias/rechazado"><h3>Pasantías rechazadas</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-9 panel-stat">
                    <div class="panel-body bg-orange">
                        <div class="icon"><i class="fa fa-envelope"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['aprobados'] }}</div>
                                <a href="/pasantias/rechazado"><h3>Pasantías aprobadas</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel no-bd bd-9 panel-stat">
                    <div class="panel-body bg-purple">
                        <div class="icon"><i class="fa fa-exclamation"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="stat-num">{{ $data['reprobados'] }}</div>
                                <a href="/pasantias/rechazado"><h3>Pasantías reprobadas</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div id="chart" style="height: 240px; width:100%;">
                                    </div>
                                    <br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

</div>

@stop


@section('javascript')

<script src="assets/plugins/metrojs/metrojs.min.js"></script>
<script src='assets/plugins/fullcalendar/moment.min.js'></script>
<script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
<script src="assets/plugins/charts-morris/raphael.min.js"></script>
<script src="assets/plugins/charts-morris/morris.min.js"></script>
<script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/dashboard.js"></script>

<script src="assets/plugins/visible/jquery.visible.js"></script>
<script src="assets/plugins/charts-d3/d3.v3.js"></script>
<script src="assets/plugins/charts-d3/nv.d3.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
<script src="assets/plugins/charts-circliful/js/jquery.circliful.min.js"></script>
<script src="assets/plugins/charts-morris/raphael.min.js"></script>
<script src="assets/plugins/charts-morris/morris.min.js"></script>


<script>
$(document).on("ready", function(){

    $.post('/chart/stats', function(data, textStatus, xhr) {

    }, 'json');

    Morris.Bar({
        element: 'chart',
        data: [
        { y: 'Pasantías', 
            pe: {{ $data['pendientes'] }}, 
            ac: {{ $data['aceptados'] }}, 
            re: {{ $data['rechazados'] }}, 
            ap: {{ $data['aprobados'] }}, 
            rp: {{ $data['reprobados'] }} },
        ],
        xkey: 'y',
        ykeys: ['pe', 'ac', 're', 'ap', 'rp'],
        labels: ['Pendientes', 'Aceptadas', 'Rechazadas', 'Aprobadas', 'Reprobadas']
    });

    
})

</script>

@stop
