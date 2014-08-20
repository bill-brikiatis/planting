<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plants', function($table) {
			
			$table->increments('id');
			$table->timestamps();
			$table->string('plant_name')->unique();
			$table->integer('indoor_offset_days')->nullable();
			$table->integer('outdoor_offset_days')->nullable();
			$table->integer('transplant_offset_days')->nullable();
			$table->boolean('direct_sow')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plants');
	}

}
