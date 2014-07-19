<?php

class CoordinadorController extends BaseController {

	public function dashboard()
	{
		/*$p = Pasantia::where('estado', '=', 'aceptado')->get();
		foreach ($p as $key => $d) {
			if(!isset($d->proceso->id)){
				$pr = new Proceso;
				$pr->aprobacion = $d->created_at;
				$pr->pasantia_id = $d->id;
				$pr->save();
			}			
		}*/

		$data['pendientes'] = count(Pasantia::current()->where('estado', '=', 'pendiente')->get());
		$data['aceptados'] = count(Pasantia::current()->where('estado', '=', 'aceptado')->get());
		$data['rechazados'] = count(Pasantia::current()->where('estado', '=', 'rechazado')->get());
		$data['aprobados'] = count(Pasantia::current()->where('estado', '=', 'aprobado')->get());
		$data['reprobados'] = count(Pasantia::current()->where('estado', '=', 'reprobado')->get());
		$data['total'] = $data['pendientes'] + $data['aceptados'] + $data['rechazados'] + $data['aprobados'] + $data['reprobados'];
		return View::make('coordinador.dashboard', ['data' => $data]);
	}

	public function pasantias($status = 'total')
	{	
		if($status == 'total'){
			$pasantias = Pasantia::current()->get();
		}else{
			$pasantias = Pasantia::current()->where('estado', '=', $status)->get();
		}
		
		//echo $pasantias[0]->empresa->empresa; exit;
		return View::make('coordinador.pasantias', ['pasantias' => $pasantias, 'status' => $status]);
	}

	public function arbitrar()
	{	
		$pasantias = Pasantia::current()->pendientes()->get();
		
		return View::make('coordinador.pasantias', ['pasantias' => $pasantias, 'status' => 'pendiente']);
	}

	

	public function pasantia($id)
	{	
		$pasantia = Pasantia::find($id);
		return View::make('coordinador.pasantia', ['pasantia' => $pasantia]);
	}

	public function action_pasantia($action, $id)
	{	
		
		$pasantia = Pasantia::find($id);

		switch ($action) {
			case 'aceptar':
			$pasantia->estado = 'aceptado';
			$proceso = new Proceso;
			$proceso->aprobacion = date("Y-m-d H:i:s");
			$proceso->pasantia_id = $pasantia->id;
			$proceso->save();
			break;
			
			case 'rechazar':
			$pasantia->estado = 'rechazado';
			break;
		}
		$pasantia->save();

		return Redirect::to('/pasantia/' . $id);
	}

	public function charts(){
		$a = [];
		$data['pendientes'] = count(Pasantia::where('estado', '=', 'pendiente')->get());
		$data['aceptados'] = count(Pasantia::where('estado', '=', 'aceptado')->get());
		$data['rechazados'] = count(Pasantia::where('estado', '=', 'rechazado')->get());
		$data['aprobados'] = count(Pasantia::where('estado', '=', 'aprobado')->get());
		$data['reprobados'] = count(Pasantia::where('estado', '=', 'reprobado')->get());

		foreach ($data as $key => $value) {
			array_push($a, ['label' => $key, 'value' => $value]);
		}

		echo json_encode($a);
	}


	public function semestres()
	{	
		$semestres = Semestre::all();
		return View::make('coordinador.semestres', ['semestres' => $semestres]);
	}

	public function activar_semestre($id)
	{
		foreach (Semestre::all() as $semestre)
		{
			$semestre->activo = 0;
			$semestre->save();
		}

		$s = Semestre::find($id);
		$s->activo = 1;
		$s->save();
		return Redirect::to('/semestres');
	}

	public function add_semestre()
	{
		$s = new Semestre;
		$s->semestre = Input::get('semestre');
		$s->descripcion = Input::get('descripcion');
		$s->save();
		return Redirect::to('/semestres');
	}
	
	public function calendario_semestre($id)
	{
		return View::make('coordinador.calendario', ['id' => $id]);
	}

	public function eventos_semestre($id)
	{
		$s = Semestre::find($id);
		echo $s->eventos->toJson();
	}

	public function evento_add()
	{
		dd(Input::all());
	}


	
	public function change_status($id, $status)
	{	
		
		$pasantia = Pasantia::find($id);

		if($status == 'reprobado'){
			$pasantia->estado = $status;
		}

		if($pasantia->proceso->getStep() >= 5){
			$pasantia->estado = $status;			
		}
		$pasantia->save();

		return Redirect::to('/pasantia/' . $id);
	}

	


}
