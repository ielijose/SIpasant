<?php

class Evento extends Eloquent {

	protected $table = 'eventos';
	public $timestamp = true;

    protected $fillable = ['title', 'start', 'end', 'className', 'semestre_id'];


}