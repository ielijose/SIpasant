<?php

class UserController extends BaseController {


	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function register()
	{
		$user = new User(Input::all());
		//$user->tipo = 'secretaria';
		if ($user->save())
		{
			Auth::loginUsingId($user->id);

			return Redirect::to('/');
		}
		return Redirect::back()->withInput()->withErrors($user->getErrors());
	}

}