<?php

class Pasantia extends Eloquent {

	protected $table = 'pasantias';
	public $timestamp = true;

    protected $fillable = ['actividad', 'suervisor_nombre', 'suervisor_cargo', 'departamento', 'fecha_inicio', 'fecha_fin', 'tipo', 'horario', 'descripcion', 'nota', 'semestre', 'estudiante_id'];

    public function estudiante()
    {
        return $this->belongsTo('Estudiante', 'estudiante_id', 'id');
    }

}