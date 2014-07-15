<?php

class Pasantia extends Eloquent {

	protected $table = 'pasantias';
	public $timestamp = true;

    protected $fillable = ['actividad', 'supervisor_nombre', 'supervisor_cargo', 'departamento', 'fecha_inicio', 'fecha_fin', 'tipo', 'horario', 'descripcion', 'nota', 'semestre', 'estudiante_id'];

    public function estudiante()
    {
        return $this->belongsTo('Estudiante', 'estudiante_id', 'id');
    }

    public function empresa()
    {
        return $this->hasOne('Empresa');
    }

    public function getEstadoBadge()
    {
    	switch ($this->estado) {
    		case 'pendiente':
         return '<button rel="tooltip" type="button" class="btn btn-warning m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El coordinador aun no aprueba la pasantia.">Pendiente</button>';
         break;

         case 'aceptado':
         return '<button rel="tooltip" type="button" class="btn btn-success m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El coordinador acepto la pasantia.">Aceptado</button>';
         break;

         case 'rechazado':
         return '<button rel="tooltip" type="button" class="btn btn-danger m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El coordinador rechazo la pasantia.">Rechazado</button>';

         case 'aprobado':
         return '<button rel="tooltip" type="label" class="label btn-success m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El estudiante aprobo la pasantia.">Aprobado</button>';

         case 'reprobado':
         return '<button rel="tooltip" type="label" class="label btn-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El estudiante reprobo la pasantia.">Reprobado</button>';
         break;
     }

 }

 public function getEstado()
 {
    return $this->estado;
}

public function getTipo()
{
   return ucfirst(str_replace('_', ' ', $this->tipo));
}

}