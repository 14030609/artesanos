<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Producto', function(Blueprint $table)
		{
			$table->integer('id_Producto', true);
			$table->integer('id_Categoria')->nullable()->index('ProductFK3');
			$table->string('Nombre', 50)->nullable();
			$table->float('precioVenta', 10, 0)->nullable();
			$table->float('precioCompra', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Producto');
	}

}
