<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeatherdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Weatherdata', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->decimal('Wind_Speed', 5, 2);
        	$table->decimal('Air_Temp', 5, 2);
	        $table->decimal('Barometric_Press', 5, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Weatherdata');
	}

}
