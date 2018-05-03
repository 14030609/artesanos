<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallePerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detallePerdida', function(Blueprint $table)
		{
			$table->integer('id_Producto');
			$table->integer('id_Perdida')->index('detallePerdidaFK2');
			$table->integer('cantidad_de_perdida')->nullable();
			$table->primary(['id_Producto','id_Perdida']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detallePerdida');
	}

}
