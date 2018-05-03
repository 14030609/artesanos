<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Cliente', function(Blueprint $table)
		{
			$table->foreign('id_Rol', 'ClienteFK1')->references('id_Rol')->on('Rol')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Cliente', function(Blueprint $table)
		{
			$table->dropForeign('ClienteFK1');
		});
	}

}
