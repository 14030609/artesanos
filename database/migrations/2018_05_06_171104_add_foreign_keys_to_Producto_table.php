<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Producto', function(Blueprint $table)
		{
			$table->foreign('id_Categoria', 'ProductFK3')->references('id_Categoria')->on('Categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Producto', function(Blueprint $table)
		{
			$table->dropForeign('ProductFK3');
		});
	}

}
