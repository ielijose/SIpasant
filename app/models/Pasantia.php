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

    public function getEstado()
    {
    	switch ($this->estado) {
    		case 'pendiente':
    			return '<button rel="tooltip" type="button" class="btn btn-warning m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="El coordinador aun no aprueba la pasantia.">Pendiente</button>';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
        
    }

    public function getTipo()
    {
    	return ucfirst(str_replace('_', ' ', $this->tipo));
    }

}