<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Venta', function(Blueprint $table)
		{
			$table->integer('id_Venta', true);
			$table->integer('id_Cliente')->nullable()->index('VentaFK');
			$table->string('id_Empleado', 10)->nullable();
			$table->date('Fecha_Venta')->nullable();
			$table->float('Subtotal', 10, 0)->nullable();
			$table->float('iva', 10, 0)->nullable();
			$table->float('TotalVenta', 10, 0)->nullable();
			$table->integer('id_CuponDescuento')->nullable()->index('VentaFK4');
			$table->integer('id_MetodosPago')->nullable()->index('VentaFK5');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Venta');
	}

}
