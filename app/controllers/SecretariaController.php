<?php

class SecretariaController extends BaseController {

	public function dashboard()
	{

		$p = Pasantia::where('estado', '=', 'aceptado')->get();
		foreach ($p as $key => $d) {
			if(!isset($d->proceso->id)){
				$pr = new Proceso;
				$pr->aprobacion = $d->created_at;
				$pr->pasantia_id = $d->id;
				$pr->save();
			}			
		}

		$data['pendientes'] = count(Pasantia::where('estado', '=', 'pendiente')->get());
		$data['aceptados'] = count(Pasantia::where('estado', '=', 'aceptado')->get());
		$data['rechazados'] = count(Pasantia::where('estado', '=', 'rechazado')->get());
		$data['aprobados'] = count(Pasantia::where('estado', '=', 'aprobado')->get());
		$data['reprobados'] = count(Pasantia::where('estado', '=', 'reprobado')->get());
		$data['total'] = count(Pasantia::all());
		return View::make('secretaria.dashboard', ['data' => $data]);
	}

	public function pasantias($status = 'total')
	{	
		if($status == 'total'){
			$pasantias = Pasantia::all();
		}else{
			$pasantias = Pasantia::where('estado', '=', $status)->get();
		}
		
		return View::make('secretaria.pasantias', ['pasantias' => $pasantias, 'status' => $status]);
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

		return Redirect::to('/pasantia/' . $proceso->pasantia_id);
	}




}
