<?php

class EstudianteController extends BaseController {

	public function dashboard()
	{
		return View::make('estudiante.dashboard');
	}

	public function registrarPasantia()
	{
		return View::make('estudiante.registrar-pasantia');
	}


}
