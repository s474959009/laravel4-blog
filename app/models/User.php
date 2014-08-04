<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	//use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	//软删除
	protected $softDelete = false;

	// public $timestamps = true;

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($token)
	{
		$this->remember_token = $token;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
	
    public function setPasswordAttribute($value)
    {
        // 若传入的字符串已经进行了 Hash 加密，则不重复处理
        $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }
}
