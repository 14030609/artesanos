<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Inventario', function(Blueprint $table)
		{
			$table->integer('id_Producto');
			$table->integer('id_Categoria')->index('InventarioFK1');
			$table->integer('Cantidad')->nullable();
			$table->primary(['id_Producto','id_Categoria']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Inventario');
	}

}
