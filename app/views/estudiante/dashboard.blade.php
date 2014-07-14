@extends('estudiante.layouts.master')

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

        	@if(!isset(Auth::user()->estudiante->pasantia->id))


            <h1> Aun no has registrado alguna pasantia, <a href="/registrar-pasantia" class="">Registra una aquí</a></h1>
            <br><br><br>

            @else

            







            <div class="page-title">
                <i class="icon-custom-left"></i>
                <h3><img class="m-r-20" src="assets/img/various/invoice.png" alt="invoice"><strong>Pasantia n° {{ Auth::user()->estudiante->pasantia->id }} </strong> 
                    <small>{{ Auth::user()->estudiante->pasantia->created_at }}</small></h3>
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
                                                    <strong>{{ Auth::user()->estudiante->nombre }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Apellido:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->apellido }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">CI:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->ci }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Carnet:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->carnet }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Dirección:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->direccion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Teléfono movil:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->telefono_movil }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">Teléfono hogar:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->telefono_hogar }}</strong>
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
                                                    <strong>{{ Auth::user()->estudiante->pasantia->actividad }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Fecha de inicio:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->fecha_inicio }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Fecha de culminación:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->fecha_fin }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Tipo:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->getTipo() }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Horario:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->horario }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Descripción:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->descripcion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Teléfono hogar:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->telefono_hogar }}</strong>
                                                </div>
                                            </div>  
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-5">  <strong>Estado:</strong>
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->getEstado() }}</strong>
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
                                                    <strong>{{ Auth::user()->estudiante->pasantia->supervisor_nombre }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Cargo:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->supervisor_cargo }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Departamento:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->departamento }}</strong>
                                                </div>
                                            </div>                                                                                                                                   
                                        </form>


                                        <h3 class="m-t-0 m-b-20">Datos de la empresa:</h3>
                                        <form class="form-horizontal p-20">
                                            <div class="form-group">
                                                <div class="col-sm-5">Empresa:</div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->empresa->empresa }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Dirección:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->empresa->direccion }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Teléfono:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->empresa->telefono }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5">Correo electronico:
                                                </div>
                                                <div class="col-sm-7">
                                                    <strong>{{ Auth::user()->estudiante->pasantia->empresa->correo }}</strong>
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
                                <div class="row p-20">
                                    <div class="col-md-12">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <i class="glyph-icon flaticon-shopping102 f-80"></i>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row align-right m-b-10">
                                                            <div class="col-md-8">
                                                                 Total Amount Orders:
                                                            </div>
                                                            <div class="col-md-3 w-600">
                                                                 $728.55
                                                            </div>
                                                        </div>
                                                        <div class="row align-right m-b-10">
                                                            <div class="col-md-8">
                                                                 Taxe:
                                                            </div>
                                                            <div class="col-md-3 w-600">
                                                                 $145.71
                                                            </div>
                                                        </div>
                                                        <div class="row align-right m-b-10">
                                                            <div class="col-md-8">
                                                                 Total Paid:
                                                            </div>
                                                            <div class="col-md-3 w-600">
                                                                 $728.55
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
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