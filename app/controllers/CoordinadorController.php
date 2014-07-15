<?php

class CoordinadorController extends BaseController {

	public function dashboard()
	{
		$data['pendientes'] = count(Pasantia::where('estado', '=', 'pendiente')->get());
		$data['aceptados'] = count(Pasantia::where('estado', '=', 'aceptado')->get());
		$data['rechazados'] = count(Pasantia::where('estado', '=', 'rechazado')->get());
		$data['total'] = count(Pasantia::all());
		return View::make('coordinador.dashboard', ['data' => $data]);
	}

	public function pasantias($status = 'total')
	{	
		if($status == 'total'){
			$pasantias = Pasantia::all();
		}else{
			$pasantias = Pasantia::where('estado', '=', $status)->get();
		}
		
		return View::make('coordinador.pasantias', ['pasantias' => $pasantias, 'status' => $status]);
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
			break;
			
			case 'rechazar':
			$pasantia->estado = 'rechazado';
			break;
		}
		$pasantia->save();

		return Redirect::to('/pasantia/' . $id);
	}

	


}
