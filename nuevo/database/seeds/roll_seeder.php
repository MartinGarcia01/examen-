<?php

use Illuminate\Database\Seeder;

class roll_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        $roll = [
        	[
        	'descripcion' => 'admin',
        	],
        	[
        	'descripcion' => 'user',
        	]
    	];

			DB::table('roll')->insert($roll);
    }//
}
