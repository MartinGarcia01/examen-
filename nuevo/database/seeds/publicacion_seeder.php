<?php

use Illuminate\Database\Seeder;

class publicacion_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('publicacion')->insert([

        	'titulo' => 'tema 1',
        	'descripcion' => 'es el primer tema',
        	'user_id' => 1,
        ]);
    }
}
