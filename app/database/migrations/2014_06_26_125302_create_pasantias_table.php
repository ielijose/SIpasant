<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasantiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pasantias', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('actividad');
            $table->string('supervisor_nombre');
            $table->string('supervisor_cargo');

            $table->string('departamento');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->enum('tipo', ['medio_tiempo', 'tiempo_completo']);
            $table->string('horario');
            $table->string('descripcion');
            $table->integer('nota');            

            $table->string('semestre');
            $table->enum('estado', ['pendiente', 'aceptado', 'rechazado', 'aprobado', 'reprobado']);

            $table->integer('estudiante_id')->unsigned();
			$table->foreign('estudiante_id')->references('id')->on('estudiantes');
           
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
		Schema::drop('pasantias');
	}

}
