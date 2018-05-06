<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Venta', function(Blueprint $table)
		{
			$table->foreign('id_Usuario', 'VentaFK')->references('id_Usuario')->on('Usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_CuponDescuento', 'VentaFK4')->references('id_CuponDescuento')->on('CuponDescuento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_MetodosPago', 'VentaFK5')->references('id_MetodosPago')->on('MetodosPago')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Venta', function(Blueprint $table)
		{
			$table->dropForeign('VentaFK');
			$table->dropForeign('VentaFK4');
			$table->dropForeign('VentaFK5');
		});
	}

}
