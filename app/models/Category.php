<?php

class Category extends Eloquent
{
	protected $table = 'categories';

	protected $softDelect = true;

	public function articles()
	{
		return $this->hasMany('Article', 'category_id');
	}
}