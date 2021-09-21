<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'Raul',
        'apellido' => 'morales',
        'dui' => '054786321',
        'telefono' => '797465545',
        'email'=> 'Rmorales.docente@gmail.com',
        'password'=> bcrypt('Rd1995')
    ];
});
