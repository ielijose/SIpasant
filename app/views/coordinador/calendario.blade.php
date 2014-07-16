@extends('coordinador.layouts.master')

@section('css')

<link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">

@stop

@section('content')

<div id="main-content" class="dashboard">
    
    <div class="row">

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

<script src="/assets/plugins/metrojs/metrojs.min.js"></script>
<script src='/assets/plugins/fullcalendar/moment.min.js'></script>
<script src='/assets/plugins/fullcalendar/fullcalendar.min.js'></script>
<script src="/assets/plugins/charts-morris/raphael.min.js"></script>
<script src="/assets/plugins/charts-morris/morris.min.js"></script>
<script src="/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/js/calendar.js"></script>
<script src="/assets/js/dashboard.js"></script>

<script>
$(document).on("ready", function(){


    
})

</script>

@stop
