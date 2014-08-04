<?php

class message extends Eloquent
{

	protected $table = 'message';

	protected $softDelete = true;

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function email()
	{
		return $this->belongsTo('User', 'email');
	}
}