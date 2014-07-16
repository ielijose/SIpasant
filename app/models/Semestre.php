<?php

class Semestre extends Eloquent {

	protected $table = 'semestre';
	public $timestamp = true;

	public function scopeCurrent($query)
    {
        return $query->where('activo', '=', '1');
    }

}