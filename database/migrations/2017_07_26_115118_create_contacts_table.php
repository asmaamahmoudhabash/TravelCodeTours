<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('about_us');
			$table->string('phone');
			$table->string('email_us');
			$table->string('address');
			$table->string('comment');
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}