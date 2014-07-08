<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = ['nombre', 'usuario', 'password', 'correo', 'tipo'];

	protected static $rules = [
        'nombre' => 'required',
        'usuario' => 'required|unique:usuarios',
        'password' => 'required',
        'correo' => 'required|email|unique:usuarios',
    ];

    //Use this for custom messages
    protected static $messages = [
        'nombre.required' => 'El nombre es obligatorio.',
        'usuario.required' => 'El usuario es obligatorio.',
        'usuario.unique' => 'El usuario ya esta en uso.',
        'correo.required' => 'El correo es obligatorio.',
        'correo.email' => 'Formato de correo invalido.',
        'correo.unique' => 'El correo ya esta en uso.',
    ];

    public function setPasswordAttribute($value)
    {
    	if ( ! empty ($value))
    	{
    		$this->attributes['password'] = \Hash::make($value);
    	}
    }

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}