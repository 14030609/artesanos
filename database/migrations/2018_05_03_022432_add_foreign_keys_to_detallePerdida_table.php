<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetallePerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detallePerdida', function(Blueprint $table)
		{
			$table->foreign('id_Producto', 'detallePerdidaFK1')->references('id_Producto')->on('Producto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_Perdida', 'detallePerdidaFK2')->references('id_Perdida')->on('Perdida')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detallePerdida', function(Blueprint $table)
		{
			$table->dropForeign('detallePerdidaFK1');
			$table->dropForeign('detallePerdidaFK2');
		});
	}

}
