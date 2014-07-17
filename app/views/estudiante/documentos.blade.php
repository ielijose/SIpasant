@extends('estudiante.layouts.master')

@section('content')

<div id="main-content" class="pricing-tables">
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h2>Documentos <small></small></h2>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">                    
                        <!-- BEGIN PRICING TABLE 2 -->
                        <div class="row plans pricing-2">
                            <h3 class="align-center m-b-40">Listado de documentos que puedes descargar:</h3>
                            <div class="col-sm-4">
                                <div class="plan">
                                    <div class="title">Postulación</div>
                                    <div class="description">
                                        <div class="plan-item">Necesita la aprobación del coordinador</div>
                                    </div>
                                    @if(isset($current) && $current->estado == 'aceptado')
                                    <a class="btn btn-success" href="/generar-carta">Descargar <i class="fa fa-download"></i></a>
                                    @else
                                    <a class="btn disabled" href="#">Descargar <i class="fa fa-download"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="plan">
                                    <div class="title">Evaluación</div>
                                    <div class="description">
                                        <div class="plan-item">Necesita el proceso "Retirar borrador"</div>
                                    </div>
                                    @if(isset($current) && $current->proceso->getStep() >= 4)
                                    <a class="btn btn-success" href="/assets/formato_dpe_pas_003_evaluacion.doc">Descargar <i class="fa fa-download"></i></a>
                                    @else
                                    <a class="btn disabled" href="#">Descargar <i class="fa fa-download"></i></a>
                                    @endif                                
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="plan">
                                    <div class="title">Aprobación</div>
                                    <div class="description">
                                        <div class="plan-item">Necesita el proceso "Retirar borrador"</div>
                                    </div>
                                    @if(isset($current) && $current->proceso->getStep() >= 4)
                                    <a class="btn btn-success" href="/assets/formato_dpe_pas_004_aprobacion.doc">Descargar <i class="fa fa-download"></i></a>
                                    @else
                                    <a class="btn disabled" href="#">Descargar <i class="fa fa-download"></i></a>
                                    @endif
                                </div>
                            </div>                            

                        </div>
                        <!-- END PRICING TABLE 2 -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop