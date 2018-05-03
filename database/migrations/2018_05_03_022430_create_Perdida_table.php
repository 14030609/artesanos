<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Perdida', function(Blueprint $table)
		{
			$table->integer('id_Perdida', true);
			$table->date('fechaPerdida')->nullable();
			$table->string('causa', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Perdida');
	}

}
