<?php

use App\Profesor;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,18)->create();
       /* DB::table('profesor')->insert([
            'id_profesor'=> '1',
            'name'=> 'Jose',
            'apellido'=> 'Pineda',
            'dui'=> '042556345',
            'telefono'=> '76004194',
            'email'=> 'jp25025@gmail.com',
            'password'=> bcrypt('Jp2021')
        ]);*/
    }
}
