<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('categories');
		Schema::create('articles', function($table)
			{
				$table->increments('id');
				$table->integer('user_id');
				$table->integer('category_id');	
				$table->integer('comment_id');			
				$table->string('title','100');
				$table->text('content');
				$table->string('slug')->unique();

				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
