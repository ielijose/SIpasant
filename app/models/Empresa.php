<?php

class Empresa extends Eloquent {

	protected $table = 'empresas';
	public $timestamp = true;

    protected $fillable = ['empresa', 'direccion', 'telefono', 'correo', 'pasantia_id'];


}