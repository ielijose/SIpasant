<?php

class Proceso extends Eloquent {

	protected $table = 'procesos';
	public $timestamp = true;

    protected $fillable = ['aprobacion', 'entrega_carta', 'entrega_borrador', 'retiro_borrador', 'entrega_final', 'pasantia_id'];

    public function getStep(){
    	$defaultDate = '0000-00-00 00:00:00';
    	$step = 0;

    	if($this->aprobacion != $defaultDate)
    		$step++;

    	if($this->entrega_carta != $defaultDate)
    		$step++;

    	if($this->entrega_borrador != $defaultDate)
    		$step++;

    	if($this->retiro_borrador != $defaultDate)
    		$step++;

    	if($this->entrega_final != $defaultDate)
    		$step++;

    	return $step;
    	
    }

    public function getNextStep(){
    	switch ($this->getStep()) {
    		case 1:
    			return '<a href="/pasantia/step/entrega_carta/' . $this->id . '" class="btn btn-warning m-b-10">Entrega de carta <i class="fa fa-arrow-right"></i></a>';
    			break;
    		case 2:
    			return '<a href="/pasantia/step/entrega_borrador/' . $this->id . '" class="btn btn-warning m-b-10">Entrega de borrador <i class="fa fa-arrow-right"></i></a>';
    			break;
    		case 3:
    			return '<a href="/pasantia/step/retiro_borrador/' . $this->id . '" class="btn btn-warning m-b-10">Retiro de borrador <i class="fa fa-arrow-right"></i></a>';
    			break;
    		case 4:
    			return '<a href="/pasantia/step/entrega_final/' . $this->id . '" class="btn btn-success m-b-10">Entrega final <i class="fa fa-arrow-right"></i></a>';
    			break;
    		case 5:
    			return '<h3>Ya se han completado todos los pasos</h3>';
    			break;

    		
    		default:
    			# code...
    			break;
    	}    	
    }

    public function getAprobacionAttribute($value){
    	return $this->datear($value);
    }
    public function getEntregaCartaAttribute($value){
    	return $this->datear($value);
    }
    public function getEntregaBorradorAttribute($value){
    	return $this->datear($value);
    }
    public function getRetiroBorradorAttribute($value){
    	return $this->datear($value);
    }
    public function getEntregaFinalAttribute($value){
    	return $this->datear($value);
    }

    public function datear($value){
    	if($value == '0000-00-00 00:00:00')
    		return '0000-00-00 00:00:00';

    	return date("d M Y  H:i:s",strtotime($value));
    }


}