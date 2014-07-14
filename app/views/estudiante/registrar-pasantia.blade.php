@extends('estudiante.layouts.master')

@section('css')
<link rel="stylesheet" href="assets/plugins/wizard/wizard.css">
<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">

<link href="assets/plugins/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.date.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.time.css" rel="stylesheet">

@stop

@section('content')

<div id="main-content">
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><strong>Registro</strong> de pasantias</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><strong>Registrar</strong> Pasantia</h3>
                            <p>Completa el siguiente formulario:</p>
                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard" action="/registrar" method="POST">
                                <h1>Estudiante</h1>
                                <section>
                                    <div class="form-group col-md-6">
                                        <label for="ci">Cédula de identidad *</label>
                                        <input id="ci" name="ci" type="text" class="form-control required" placeholder="21382657">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="carnet">Carnet *</label>
                                        <input id="carnet" name="carnet" type="text" class="form-control required" placeholder="001516606">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="direccion">Dirección *</label>
                                        <input id="direccion" name="direccion" type="text" class="form-control required" placeholder="Santa Rita">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="telefono_movil">Teléfono Celular *</label>
                                        <input id="telefono_movil" name="telefono_movil" type="text" class="form-control required" placeholder="04246029989">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="telefono_hogar">Teléfono de Habitación *</label>
                                        <input id="telefono_hogar" name="telefono_hogar" type="text" class="form-control required" placeholder="02649340424">
                                    </div>

                                    <p>(*) Obligatorio</p>
                                </section>
                                <h1>Empresa</h1>
                                <section>
                                    <div class="form-group">
                                        <label for="empresa">Nombre de la empresa *</label>
                                        <input id="empresa" name="empresa" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group">
                                        <label for="empresa_direccion">Dirección *</label>
                                        <input id="empresa_direccion" name="empresa_direccion" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group">
                                        <label for="empresa_telefono">Télefono *</label>
                                        <input id="empresa_telefono" name="empresa_telefono" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="empresa_correo">Correo Electronico *</label>
                                        <input id="empresa_correo" name="empresa_correo" type="text" class="form-control required email">
                                    </div>
                                    
                                    <p>(*) Obligatorio</p>
                                </section>
                                <h1>Supervisor</h1>
                                <section>
                                    <div class="form-group">
                                        <label for="supervisor_nombre">Supervisor *</label>
                                        <input id="supervisor_nombre" name="supervisor_nombre" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group">
                                        <label for="supervisor_cargo">Cargo del Supervisor *</label>
                                        <input id="supervisor_cargo" name="supervisor_cargo" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group">
                                        <label for="departamento">Departamento *</label>
                                        <input id="departamento" name="departamento" type="text" class="form-control required">
                                    </div>
                                    
                                    <p>(*) Obligatorio</p>
                                </section>
                                <h1>Actividad</h1>
                                <section>
                                    <div class="form-group col-md-12">
                                        <label for="actividad">Actividad a realizar *</label>
                                        <input id="actividad" name="actividad" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="tipo">Tipo *</label>
                                        <fieldset data-role="controlgroup" data-type="horizontal" class="fselect">
                                            <input type="radio" name="tipo" id="radio-choice-t-6a" value="medio_tiempo">
                                            <label for="radio-choice-t-6a">Medio tiempo</label>
                                            <input type="radio" name="tipo" id="radio-choice-t-6b" value="tiempo_completo">
                                            <label for="radio-choice-t-6b">Tiempo completo</label>
                                        </fieldset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="fecha_inicio">Fecha de inicio *</label>
                                        <input id="fecha_inicio" name="fecha_inicio" type="date" class="form-control required"> 

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="fecha_fin">Fecha de culminación *</label>
                                        <input id="fecha_fin" name="fecha_fin" type="date" class="form-control required">
                                    </div>

                                    

                                    <div class="form-group col-md-12">
                                        <label for="horario">Horario *</label>
                                        <input id="horario" name="horario" type="text" class="form-control required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="descripcion">Descripción *</label>
                                        <input id="descripcion" name="descripcion" type="text" class="form-control required">
                                    </div>
                                    
                                    <p>(*) Obligatorio</p>

                                </section>
                            </form>
                            <!-- END FORM WIZARD WITH VALIDATION -->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script type="text/javascript" src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/plugins/wizard/wizard.js"></script>
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script>
<script src="assets/js/form_wizard.js"></script>

<script>
$(document).on("ready", function(){
    $("#radio-choice-t-6a").prop('checked', true);
})

</script>

@stop