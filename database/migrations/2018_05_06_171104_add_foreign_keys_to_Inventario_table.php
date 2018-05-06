<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInventarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Inventario', function(Blueprint $table)
		{
			$table->foreign('id_Categoria', 'InventarioFK1')->references('id_Categoria')->on('Categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_Producto', 'InventarioFK2')->references('id_Producto')->on('Producto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Inventario', function(Blueprint $table)
		{
			$table->dropForeign('InventarioFK1');
			$table->dropForeign('InventarioFK2');
		});
	}

}
