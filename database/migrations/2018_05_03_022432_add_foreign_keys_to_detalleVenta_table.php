<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetalleVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detalleVenta', function(Blueprint $table)
		{
			$table->foreign('id_Venta', 'detalleVentaFk1')->references('id_Venta')->on('Venta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_Producto', 'detalleVentaFk2')->references('id_Producto')->on('Producto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detalleVenta', function(Blueprint $table)
		{
			$table->dropForeign('detalleVentaFk1');
			$table->dropForeign('detalleVentaFk2');
		});
	}

}
