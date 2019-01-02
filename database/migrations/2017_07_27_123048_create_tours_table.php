<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursTable extends Migration {

	public function up()
	{
		Schema::create('tours', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('place');
			$table->string('price');
			$table->string('available_number');
			$table->string('duration');
			$table->string('offer');
			$table->integer('continent_id');
			$table->integer('category_id');
			$table->integer('tag_id');
			$table->string('vedio');
			$table->string('air_line');
			$table->string('type');
			$table->string('fare');
			$table->string('cancelation');
			$table->string('change');
			$table->string('seats_paggages');
			$table->string('inflight_features');
			$table->string('base_fare');
			$table->string('description');
			$table->string('taxes_feases');
			$table->decimal('lat', 11,8);
			$table->integer('has_offer');
			$table->decimal('lon', 11,8);
			$table->datetime('start_date');
			$table->datetime('final_date');
			$table->integer('adults');
			$table->integer('Kids');
		});
	}

	public function down()
	{
		Schema::drop('tours');
	}
}