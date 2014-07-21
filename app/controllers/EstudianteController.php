<?php

class EstudianteController extends BaseController {

	public function dashboard()
	{		
		$p = Pasantia::current()->self()->first();
		return View::make('estudiante.dashboard', ['pasantia' => $p]);
	}

	public function registrarPasantia()
	{
		return View::make('estudiante.registrar-pasantia');
	}

	public function registrar()
	{
		$inputs = Input::all();
		//dd($inputs);

		$inputs['nombre'] = Auth::user()->nombre;
		$inputs['apellido'] = Auth::user()->apellido;
		$inputs['usuario_id'] = Auth::user()->id;
		$inputs['semestre'] = Auth::user()->getSemestreId();
		/* ESTUDIANTE */
		if(isset(Auth::user()->estudiante->id)){
			$estudiante = Estudiante::find(Auth::user()->estudiante->id);
		}else{
			$estudiante = new Estudiante($inputs);
		}
		
		$estudiante->save();
		/* PASANTIA */
		$pasantia = new Pasantia($inputs);
		$pasantia->estudiante_id = $estudiante->id;
		$pasantia->save();
		/* EMPRESA */
		$empresa = new Empresa();

		$empresa->empresa = $inputs['empresa'];
		$empresa->direccion = $inputs['empresa_direccion'];
		$empresa->telefono = $inputs['empresa_telefono'];
		$empresa->correo = $inputs['empresa_correo'];
		$empresa->pasantia_id = $pasantia->id;
		$empresa->save();


		$text = "Acabas de registrar una pasantia, recibirar algunas notificaciones del proceso por este medio.";
		$estudiante->sms($text);

		return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'Pasantia registrada con exito.']);
	}

	public function generarCarta()
	{
		$p = Pasantia::current()->self()->get()[0];
		$html = utf8_decode(View::make('estudiante.carta', ['p' => $p]));
		return PDF::load($html, 'A4', 'portrait')->show();
	}

	public function pasantias()
	{
		return View::make('estudiante.pasantias', ['pasantias' => Pasantia::self()->get()]);
	}

	public function pasantia($id)
	{
		$pasantia = Pasantia::self()->find($id);

		return View::make('estudiante.pasantia', ['pasantia' => $pasantia]);
	}

	public function documentos()
	{
		return View::make('estudiante.documentos');
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