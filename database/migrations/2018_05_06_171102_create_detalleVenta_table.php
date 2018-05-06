<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalleVenta', function(Blueprint $table)
		{
			$table->integer('id_Producto');
			$table->integer('id_Venta')->index('detalleVentaFk1');
			$table->integer('cantidadProducto')->nullable();
			$table->float('Total', 10, 0)->nullable();
			$table->primary(['id_Producto','id_Venta']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalleVenta');
	}

}
