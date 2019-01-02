<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutUsTable extends Migration {

	public function up()
	{
		Schema::create('about_us', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('who_we_are');
			$table->text('what_we_do');
			$table->text('image');
		});
	}

	public function down()
	{
		Schema::drop('about_us');
	}
}