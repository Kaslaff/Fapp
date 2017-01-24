<?php

/* This seeder is just for test */

use Illuminate\Database\Seeder;

class FapMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'user'	=>	'fapmaster',
        	'pass'	=>	'secret',
        	'fm'	=>	1,
        	'exp'	=> 	99999,
        ]);
    }
}
