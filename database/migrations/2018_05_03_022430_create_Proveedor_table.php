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
			$table->string('Nombre', 100)->nullable();
			$table->string('pagina_Web', 100)->nullable();
			$table->string('Telefono', 10)->nullable();
			$table->string('Direccion', 100)->nullable();
			$table->string('E_mail', 100)->nullable();
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
