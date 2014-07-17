@extends('secretaria.layouts.master')

@section('css')

<link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">

@stop

@section('content')

<div id="main-content" class="dashboard">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="panel forum-category">
                <div class="panel-heading no-bd bg-dark">
                    <h3 class="panel-title">Procesos</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>Aprobación<span class="pull-right badge badge-dark"> {{ $step[1] or '0' }} </span></li>
                                <li>Entrega de carta<span class="pull-right badge badge-dark"> {{ $step[2] or '0' }} </span></li>
                                <li>Entrega borrador<span class="pull-right badge badge-dark"> {{ $step[3] or '0' }} </span></li>
                                <li>Retiro borrador<span class="pull-right badge badge-dark"> {{ $step[4] or '0' }} </span></li>
                                <li>Entrega Final<span class="pull-right badge badge-dark"> {{ $step[5] or '0' }} </span></li>
                                <li></li>
                                <li>Total<span class="pull-right badge badge-dark"> {{ $step['total'] or '0' }} </span></li>
                            </ul>
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

    Morris.Bar({
        element: 'chart',
        data: [
        { y: 'Pasantias', 
        ap: {{ $step[1] or '0' }}, 
        ec: {{ $step[2] or '0' }}, 
        eb: {{ $step[3] or '0' }}, 
        rb: {{ $step[4] or '0' }}, 
        ef: {{ $step[5] or '0' }} },
        ],
        xkey: 'y',
        ykeys: ['ap', 'ec', 'eb', 'rb', 'ef'],
        labels: ['Aprobación', 'Entrega de carta', 'Entrega borrador', 'Retiro borrador', 'Entrega Final']
    });

    
})

</script>

@stop
