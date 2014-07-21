<?php

class SecretariaController extends BaseController {

	public function dashboard()
	{
		$step = [];
		$step['total'] = 0;
		$aceptados = Pasantia::current()->aceptados()->get();

		foreach ($aceptados as $key => $a) {
			if(isset($step[$a->proceso->getStep()])){
				$step[$a->proceso->getStep()]++;
			}else{
				$step[$a->proceso->getStep()] = 1;
			}
			$step['total']++;
		}
		return View::make('secretaria.dashboard', ['step' => $step]);
	}

	public function actualizar()
	{			
		$pasantias = Pasantia::current()->aceptados()->get();		
		
		return View::make('secretaria.actualizar', ['pasantias' => $pasantias, 'status' => 'aceptada']);
	}

	public function pasantia($id)
	{	
		$pasantia = Pasantia::find($id);
		return View::make('secretaria.pasantia', ['pasantia' => $pasantia]);
	}

	public function step($step, $id)
	{	
		$proceso = Proceso::find($id);

		$proceso->$step = date("Y-m-d H:i:s");
		$proceso->save();

		$proceso->notify();

		return Redirect::to('/pasantia/' . $proceso->pasantia_id);
	}

	public function calendario()
	{
		return View::make('estudiante.calendario', ['id' => Semestre::current()->first()->id]);
	}

	public function eventos_semestre($id)
	{
		$s = Semestre::find($id);
		echo $s->eventos->toJson();
	}

}
