<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Surte', function(Blueprint $table)
		{
			$table->integer('id_Proveedor');
			$table->integer('id_Producto')->index('SuerteFK2');
			$table->date('fecha');
			$table->integer('Cantidad')->nullable();
			$table->primary(['id_Proveedor','id_Producto','fecha']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Surte');
	}

}
