<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Proveedor', function(Blueprint $table)
		{
			$table->integer('id_Proveedor', true);
			$table->string('nombre', 100)->nullable();
			$table->string('telefono', 10)->nullable();
			$table->string('direccion', 100)->nullable();
			$table->string('e_mail', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Proveedor');
	}

}
