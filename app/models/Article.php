<?php

class Article extends Eloquent
{
	protected $table = 'articles';

	protected $softDelected = true;

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function category()
	{
		return $this->belongsTo('Category', 'category_id');
	}

	public function comments()
	{
		return $this->hasMany('Comment', 'article_id');
	}

	public function getContentAttribute($value)
	{
		return  stripslashes(HTML::decode($value));
	}
}