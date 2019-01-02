<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->string('title');
			$table->string('body');
			$table->integer('status');
		});
	}

	public function down()
	{
		Schema::drop('sliders');
	}
}