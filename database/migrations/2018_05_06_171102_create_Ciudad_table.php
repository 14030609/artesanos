<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ciudad', function(Blueprint $table)
		{
			$table->integer('id_Ciudad', true);
			$table->string('nombre', 50)->nullable();
			$table->integer('id_Estado')->index('CiudadFk');
			$table->primary(['id_Ciudad','id_Estado']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Ciudad');
	}

}
