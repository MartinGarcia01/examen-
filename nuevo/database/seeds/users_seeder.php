<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        
        //
        $users = [
        	[
        	'name' => 'Grado1',
        	'email' => 'email@email.org',
        	'password' => bcrypt('password'),
        	'roll_id'=> 1,
        	],
        	[
        	'name' => 'Grado2',
        	'email' => 'hola@hola.org',
        	'password' => bcrypt('password'),
        	'roll_id'=> 2,
        	]
    	];

			DB::table('users')->insert($users);
    }
}
