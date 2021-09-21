<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'Alberto',
        'apellido' => 'Martinez',
        'fecha_nacimiento' => '17/04/1990',
        'direccion' => 'Los planes de renderos',
        'genero' => 'M',
        'telefono' => '78533835',
        'email' => 'martinezlinares.alberto@gmail.com',
        'password' => bcrypt('K2021')
    ];
});
