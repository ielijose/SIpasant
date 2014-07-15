<?php

class AppTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		for ($i = 0; $i < 100; $i++)
		{
			$user = User::create(array(
				'usuario' => $faker->userName,
				'nombre' => $faker->firstName,
				'apellido' => $faker->lastName,
				'correo' => $faker->email,
				'password' => $faker->word,
				'tipo' => $faker->randomElement($array = ['estudiante', 'secretaria', 'coordinador'])
				));

			if($user->tipo == 'estudiante'){
				$estudiante = Estudiante::create(array(
					'nombre' => $user->nombre  ,
					'apellido' => $user->apellido  ,
					'ci' => $faker->randomNumber(8)  ,
					'carnet' => $faker->randomNumber(8)  ,
					'direccion' => $faker->address  ,
					'telefono_movil' => $faker->phoneNumber  ,
					'telefono_hogar' => $faker->phoneNumber  ,
					'usuario_id' => $user->id  
					));

				$pasantia = Pasantia::create(array(
					'actividad' => $faker->bs,		
					'supervisor_nombre' => $faker->name,		
					'supervisor_cargo' => $faker->catchPhrase,
					'departamento' => $faker->companySuffix,		
					'fecha_fin' => $dt = $faker->dateTime(),		
					'fecha_inicio' => $faker->dateTime($dt),		
					'tipo' => $faker->randomElement($a = ['medio_tiempo', 'tiempo_completo']),
					'horario' => $faker->timezone,		
					'descripcion' => $faker->text,		
					'semestre' => $faker->randomElement($b = [1,2,3]),		
					'estado' => $faker->randomElement($b = ['pendiente', 'aceptado', 'rechazado', 'aprobado', 'reprobado']),
					'estudiante_id' => $estudiante->id,
					'nota' => 0
					));

				$empresa = Empresa::create(array(
					'empresa' => $faker->company,		
					'direccion' => $faker->address,		
					'telefono' => $faker->phoneNumber,
					'correo' => $faker->email,
					'pasantia_id' => $pasantia->id
					));

				
			}

		}
	}

}