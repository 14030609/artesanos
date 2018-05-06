<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSurteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Surte', function(Blueprint $table)
		{
			$table->foreign('id_Proveedor', 'SuerteFK1')->references('id_Proveedor')->on('Proveedor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_Producto', 'SuerteFK2')->references('id_Producto')->on('Producto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Surte', function(Blueprint $table)
		{
			$table->dropForeign('SuerteFK1');
			$table->dropForeign('SuerteFK2');
		});
	}

}
