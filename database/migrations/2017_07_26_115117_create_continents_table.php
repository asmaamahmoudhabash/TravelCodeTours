<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContinentsTable extends Migration {

	public function up()
	{
		Schema::create('continents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('map_image');
		});
	}

	public function down()
	{
		Schema::drop('continents');
	}
}