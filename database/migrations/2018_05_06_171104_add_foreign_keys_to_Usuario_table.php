<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Usuario', function(Blueprint $table)
		{
			$table->foreign('id_Rol', 'UsuarioFK1')->references('id_Rol')->on('Rol')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Usuario', function(Blueprint $table)
		{
			$table->dropForeign('UsuarioFK1');
		});
	}

}
