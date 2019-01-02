<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('body');
			$table->string('title');
			$table->datetime('published_at');
			$table->string('user_id');
			$table->integer('tour_id');
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}