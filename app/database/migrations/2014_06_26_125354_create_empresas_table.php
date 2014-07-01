<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procesos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->datetime('aprobacion');
			$table->datetime('entrega_carta');
			$table->datetime('entrega_borrador');
			$table->datetime('retiro_borrador');
			$table->datetime('entrega_final');

            $table->integer('pasantia_id')->unsigned();
			$table->foreign('pasantia_id')->references('id')->on('pasantias');
           
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procesos');
	}

}
