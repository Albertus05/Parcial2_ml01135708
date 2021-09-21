<?php

use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnos::class,18)->create();
       /* Alumnos::create(
            [
            'id_alumno'=> '1',
            'name'=> 'Alberto',
            'apellido'=> 'Martinez',
            'fecha_nacimiento'=> '17/04/1990',
            'direccion'=> 'Los planes de renderos',
            'genero'=> 'M',
            'apellido'=> 'Martinez',
            'telefono'=> '78533835',
            'email'=> 'martinezlinares.alberto@gmail.com',
            'password'=> bcrypt('K2021')
            
             ]
        );*/
    }
}
