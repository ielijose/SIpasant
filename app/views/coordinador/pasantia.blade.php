@extends('coordinador.layouts.master')

@section('content')

<div id="main-content">
    <div class="row">
        <div class="col-lg-12">

            @if(Session::has('alert'))
                <div class="alert alert-{{ Session::get('alert.type') }} fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Aviso!</strong> {{ Session::get('alert.message') }}
                </div>
            @endif

        	@if(isset($pasantia))


            







            <div class="page-title">
                <i class="icon-custom-left"></i>
                <h3><img class="m-r-20" src="/assets/img/various/invoice.png" alt="invoice"><strong>Pasantía n° {{ $pasantia->id }} </strong> 
                    <small>{{ $pasantia->created_at }}</small></h3>
                <br>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#estudiante" data-toggle="tab">Estudiante</a></li>
                            <li><a href="#pasantia" data-toggle="tab">Pasantia</a></li>
                            @if(isset($pasantia->proceso->id))
                            <li><a href="#procesos" data-toggle="tab">Procesos 
                                <span class="m-l-10 badge badge-primary">{{ $pasantia->proceso->getStep() }}</span></a>
                            </li>
                            @endif
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="estudiante">
                                <div class="row p-20">
                                    <div class="col-md-12">
                                        <h3 class="m-t-0 m-b-20">Datos del estudiante:</h3>
                                        <form class="form-horizontal p-20">
                                            <div class="form-group">
                                                <div class="col-sm-2">Nombre:</div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->nombre }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Apellido:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->apellido }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">CI:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->ci }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Carnet:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->carnet }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Dirección:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->direccion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Teléfono movil:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->telefono_movil }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Teléfono hogar:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->telefono_hogar }}</strong>
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pasantia">
                                <div class="row p-20">
                                    <div class="col-md-6">
                                        <h3 class="m-t-0 m-b-20">Datos de la actividad:</h3>
                                        <form class="form-horizontal p-20">
                                            <div class="form-group">
                                                <div class="col-sm-5">Actividad:</div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->actividad }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Fecha de inicio:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->fecha_inicio }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Fecha de culminación:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->fecha_fin }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Tipo:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->getTipo() }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Horario:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->horario }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Descripción:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->descripcion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Teléfono hogar:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->estudiante->telefono_hogar }}</strong>
                                                </div>
                                            </div>  
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-5">  <strong>Estado:</strong>
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->getEstadoBadge() }}</strong>
                                                    @if($pasantia->getEstado() == 'pendiente')
                                                    <hr>
                                                    <a href="/pasantia/action/aceptar/{{ $pasantia->id}}" type="button" class="btn btn-success">Aceptar</a>
                                                    <a href="/pasantia/action/rechazar/{{ $pasantia->id}}" type="button" class="btn btn-danger">Rechazar</a>
                                                    @endif
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="m-t-0 m-b-20">Datos del supervisor:</h3>
                                        <form class="form-horizontal p-20">
                                            <div class="form-group">
                                                <div class="col-sm-5">Nombre:</div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->supervisor_nombre }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Cargo:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->supervisor_cargo }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Departamento:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->departamento }}</strong>
                                                </div>
                                            </div>                                                                                                                                   
                                        </form>


                                        <h3 class="m-t-0 m-b-20">Datos de la empresa:</h3>
                                        <form class="form-horizontal p-20">
                                            <div class="form-group">
                                                <div class="col-sm-5">Empresa:</div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->empresa->empresa }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Dirección:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->empresa->direccion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Teléfono:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->empresa->telefono }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Correo electronico:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ $pasantia->empresa->correo }}</strong>
                                                </div>
                                            </div>                                                                                       
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                            
                            @if(isset($pasantia->proceso->id))
                            <div class="tab-pane fade" id="procesos">
                                <div class="row p-20">
                                    <div class="col-md-12">
                                        <table id="products-table" cellpadding="0" cellspacing="0" border="0" class="table table-tools table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <strong>Proceso</strong>
                                                    </th>
                                                    <th>
                                                        <strong>Fecha</strong>
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($pasantia->proceso->getStep() >= 1)
                                                <tr>
                                                    <td>Aprobación</td>
                                                    <td>{{ $pasantia->proceso->aprobacion }}</td>                                                    
                                                </tr>
                                                @endif
                                                
                                                @if($pasantia->proceso->getStep() >= 2)
                                                <tr>
                                                    <td>Entrega de carta</td>
                                                    <td>{{ $pasantia->proceso->entrega_carta }}</td>                                                    
                                                </tr>
                                                @endif

                                                @if($pasantia->proceso->getStep() >= 3)
                                                <tr>
                                                    <td>Entrega borrador</td>
                                                    <td>{{ $pasantia->proceso->entrega_borrador }}</td>                                                    
                                                </tr>
                                                @endif

                                                @if($pasantia->proceso->getStep() >= 4)
                                                <tr>
                                                    <td>Retiro borrador</td>
                                                    <td>{{ $pasantia->proceso->retiro_borrador }}</td>                                                    
                                                </tr>
                                                @endif

                                                @if($pasantia->proceso->getStep() >= 5)
                                                <tr>
                                                    <td>Entrega Final</td>
                                                    <td>{{ $pasantia->proceso->entrega_final }}</td>                                                    
                                                </tr>
                                                @endif


                                            </tbody>
                                        </table>

                                        @if($pasantia->proceso->getStep() >= 5 && $pasantia->estado == 'aceptado')
                                            <a href="/pasantia/{{$pasantia->id}}/aprobado" class="btn btn-success">Aprobar <i class="fa fa-check"></i></a>
                                            @endif
                                        @if($pasantia->estado == 'aceptado')
                                            <a href="/pasantia/{{$pasantia->id}}/reprobado" class="btn btn-danger">Reprobar <i class="fa fa-times"></i></a>
                                            @endif
                                        
                                    </div>
                                </div>
                                
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>







            @endif


        </div>
    </div>
</div>

@stop