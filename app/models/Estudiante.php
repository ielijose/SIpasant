<?php

class Estudiante extends Eloquent {

	protected $table = 'estudiantes';
	public $timestamp = true;

    protected $fillable = ['nombre', 'apellido', 'ci', 'carnet', 'direccion', 'telefono_movil', 'telefono_hogar', 'usuario_id'];

    public function user()
    {
        return $this->belongsTo('User', 'usuario_id', 'id');
    }

	public function parroquias()
    {
        return $this->hasMany('Parroquia', 'municipio_id', 'id');
    }

}