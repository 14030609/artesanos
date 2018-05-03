<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnviosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Envios', function(Blueprint $table)
		{
			$table->foreign('id_Ciudad', 'EnviosFk')->references('id_Ciudad')->on('Ciudad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_Cliente', 'EnviosFk2')->references('id_Cliente')->on('Cliente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Envios', function(Blueprint $table)
		{
			$table->dropForeign('EnviosFk');
			$table->dropForeign('EnviosFk2');
		});
	}

}
