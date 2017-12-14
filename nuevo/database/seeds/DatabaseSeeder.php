<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roll_seeder::class);
    	$this->call(users_seeder::class);
    	$this->call(publicacion_seeder::class);

    }
}
