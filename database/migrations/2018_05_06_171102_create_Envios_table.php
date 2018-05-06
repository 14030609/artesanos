<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnviosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Envios', function(Blueprint $table)
		{
			$table->integer('id_Envio', true);
			$table->string('nombre', 30)->nullable();
			$table->string('email', 100)->nullable();
			$table->integer('id_Ciudad');
			$table->integer('id_Estado');
			$table->string('telefono', 20)->nullable();
			$table->string('direccion', 100)->nullable();
			$table->integer('id_Usuario')->nullable()->index('EnviosFk2');
			$table->primary(['id_Envio','id_Ciudad','id_Estado']);
			$table->index(['id_Ciudad','id_Estado'], 'EnviosFk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Envios');
	}

}
