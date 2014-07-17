<?php

class Evento extends Eloquent {

	protected $table = 'eventos';
	public $timestamp = true;

    protected $fillable = ['title', 'date', 'class', 'semestre_id'];


}