<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuario', function(Blueprint $table)
		{
			$table->integer('id_Usuario', true);
			$table->string('nombre_Usuario', 100)->nullable();
			$table->string('pass', 50)->nullable();
			$table->integer('id_Rol')->index('UsuarioFK1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Usuario');
	}

}
