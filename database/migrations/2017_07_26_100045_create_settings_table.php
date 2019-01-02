<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('facebook');
			$table->string('twiter');
			$table->string('instgram');
			$table->string('google_plus');
			$table->string('skype');
			$table->string('pinterest');
			$table->string('address');
			$table->string('phone');
			$table->string('email');
			$table->string('email_info');
			$table->string('website_name');
			$table->string('logo_footer');
			$table->string('logo_footer_content');
			$table->string('behance');
			$table->text('meta_keyword');
			$table->string('meta_title');
			$table->text('meta_describtion');
			$table->string('map');
			$table->string('blank_title');
			$table->string('blank_content');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}