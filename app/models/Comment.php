<?php 

class Comment extends Eloquent
{
	protected $table = 'comments';

	protected $softDelete = true;

	public function article()
	{
		return $this->belongsTo('Article', 'article_id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}