<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuponDescuentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CuponDescuento', function(Blueprint $table)
		{
			$table->integer('id_CuponDescuento', true);
			$table->string('nombre', 30)->nullable();
			$table->string('descripcion', 100)->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_termino')->nullable();
			$table->integer('porcentaje')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CuponDescuento');
	}

}
