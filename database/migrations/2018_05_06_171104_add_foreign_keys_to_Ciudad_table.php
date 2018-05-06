<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Ciudad', function(Blueprint $table)
		{
			$table->foreign('id_Estado', 'CiudadFk')->references('id_Estado')->on('Estado')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Ciudad', function(Blueprint $table)
		{
			$table->dropForeign('CiudadFk');
		});
	}

}
