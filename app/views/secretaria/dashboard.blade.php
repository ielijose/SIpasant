@extends('secretaria.layouts.master')

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
                                <a href="/pasantias/total"><h3>Pasantias _________</h3></a>
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
                                <a href="/pasantias/pendiente"><h3>Pasantias pendientes</h3></a>

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
                                <a href="/pasantias/aceptado"><h3>Pasantias aceptadas</h3></a>
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
                                <a href="/pasantias/rechazado"><h3>Pasantias rechazadas</h3></a>
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
                                <a href="/pasantias/rechazado"><h3>Pasantias aprobadas</h3></a>
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
                                <a href="/pasantias/rechazado"><h3>Pasantias reprobadas</h3></a>
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



    
    <div class="row hide">

        <div class="col-lg-12 m-b-20">
            <div class="modal fade" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Manage</strong> my events</h4>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event">Create event</button>
                            <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div id="external-events" class="bg-white row m-0">
                <div class="col-md-4 p-0">
                    <div class="widget bg-gray-l">
                        <div class="widget-body p-b-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="panel-title width-100p c-blue w-500 f-20 carrois" id="calender-current-day">Events Manager</h2>
                                    <div id='external-events'>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="external-event bg-green" data-class="bg-green" style="position: relative;">
                                            <i class="fa fa-move"></i>Sport
                                        </div>
                                        <div class="external-event bg-purple" data-class="bg-purple" style="position: relative;">
                                            <i class="fa fa-move"></i>Meeting
                                        </div>
                                        <div class="external-event bg-red" data-class="bg-red" style="position: relative;">
                                            <i class="fa fa-move"></i>Work
                                        </div>
                                        <div class="external-event bg-blue" data-class="bg-blue" style="position: relative;">
                                            <i class="fa fa-move"></i>Children
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1 p-0 no-bd">
                    <div class="widget bg-white">
                        <div class="widget-body p-b-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="calendar"></div>
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
<script src="assets/js/calendar.js"></script>
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
        { y: 'Pasantias', pe: 6, ac: 14, re:12, ap:3, rp: 2 },
        ],
        xkey: 'y',
        ykeys: ['pe', 'ac', 're', 'ap', 'rp'],
        labels: ['Pendientes', 'Aceptadas', 'Rechazadas', 'Aprobadas', 'Reprobadas']
    });

    
})

</script>

@stop
