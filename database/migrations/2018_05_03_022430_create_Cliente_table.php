<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cliente', function(Blueprint $table)
		{
			$table->integer('id_Cliente', true);
			$table->string('Pass', 50)->nullable();
			$table->integer('id_Rol')->index('ClienteFK1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Cliente');
	}

}
