<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'id_nota'=> '1',
            'nota1'=> '8.5',
            'nota2'=> '8.1',
            'nota3'=> '9',
            'nota4'=> '9.3',
            'promedio'=> '8.1',
            'parcial'=> '9.5',
            'id_alumno'=> '1',
            'id_cursos'=> '1',
            'id_profesor'=> '1'

        ]);
    }
}
