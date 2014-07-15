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
                <h3><img class="m-r-20" src="/assets/img/various/invoice.png" alt="invoice"><strong>Pasantia n° {{ $pasantia->id }} </strong> 
                    <small>{{ $pasantia->created_at }}</small></h3>
                <br>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcordion">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#order_resume" data-toggle="tab">Estudiante</a></li>
                            <li><a href="#order_details" data-toggle="tab">Pasantia</a></li>
                            <li><a href="#order_history" data-toggle="tab">Procesos 
                                <span class="m-l-10 badge badge-primary">3</span></a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="order_resume">
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
                            <div class="tab-pane fade" id="order_details">
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
                            
                            <div class="tab-pane fade" id="order_history">
                                <div class="row p-20">
                                    <div class="col-md-12">
                                        <table id="products-table" cellpadding="0" cellspacing="0" border="0" class="table table-tools table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:70px"><strong>ID</strong>
                                                    <th><strong>Purchase Date</strong>
                                                    </th>
                                                    <th><strong>Reference</strong>
                                                    </th>
                                                    <th><strong>Client</strong>
                                                    </th>
                                                    <th><strong>Amount</strong>
                                                    </th>
                                                    <th><strong>Items</strong>
                                                    </th>
                                                    <th><strong>Delivery date</strong>
                                                    </th>
                                                    <th><strong>Destination</strong>
                                                    </th>
                                                    <th class="text-center"><strong>Status</strong>
                                                    </th>
                                                    <th class="text-center"><strong>Actions</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>03/11/2013</td>
                                                    <td>SV 456 878 647</td>
                                                    <td>John Miller</td>
                                                    <td>$125.20</td>
                                                    <td>5</td>
                                                    <td>02/10/2013</td>
                                                    <td>New York</td>
                                                    <td class="text-center">
                                                        <span class="label label-success w-300">Shipped</span>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <a href="" type="button" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>02/11/2013</td>
                                                    <td>BG 588 735 457</td>
                                                    <td>John Miller</td>
                                                    <td>$352.55</td>
                                                    <td>12</td>
                                                    <td>01/10/2013</td>
                                                    <td>Chicago</td>
                                                    <td class="text-center">
                                                        <span class="label label-success w-300">Shipped</span>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <a href="" type="button" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>04/09/2013</td>
                                                    <td>YT 124 856 565</td>
                                                    <td>John Miller</td>
                                                    <td>$121.00</td>
                                                    <td>6</td>
                                                    <td>28/09/2013</td>
                                                    <td>Los Angeles</td>
                                                    <td class="text-center">
                                                        <span class="label label-success w-300">Shipped</span>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <a href="" type="button" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
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