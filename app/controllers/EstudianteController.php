<?php

class EstudianteController extends BaseController {

	public function dashboard()
	{
		//echo Auth::user()->estudiante->pasantia->toJson(); exit;
		return View::make('estudiante.dashboard', ['pasantia' => Auth::user()->estudiante->getCurrentPasantia()]);
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
		$estudiante = new Estudiante($inputs);
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
		
		return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'Pasantia registrada con exito.']);
	}

	public function generarCarta()
	{
		$p = Pasantia::current()->self()->get()[0];
		$html = utf8_decode(View::make('estudiante.carta', ['p' => $p]));
		return PDF::load($html, 'A4', 'portrait')->show();
	}
}