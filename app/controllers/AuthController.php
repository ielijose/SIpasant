<?php

class AuthController extends BaseController {

	public function showLogin()
	{
		return View::make('login');
	}	

	public function login()
	{

		//dd(Input::all());
		$rules = array(
			'usuario_login'    => 'required',
			'contrasena_login' => 'required' 
			);
		$messages = [
			'usuario_login.required' => 'El usuario es obligatorio.',
			'contrasena_login.required' => 'La contraseña es obligatoria.',
		];

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput(Input::except('contrasena_login'));
		} else {

			$userdata = array(
				'usuario' => Input::get('usuario_login'),
				'password'=> Input::get('contrasena_login')
				);
			//dd($userdata);
			if(Auth::attempt($userdata))
			{
				return Redirect::to('/');
			}
			return Redirect::to('login')
				->with('message', 'Tus datos son incorrectos')
				->withInput();

		}

	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}

}