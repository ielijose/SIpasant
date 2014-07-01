<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('empresa');
			$table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            
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
		Schema::drop('empresas');
	}

}
