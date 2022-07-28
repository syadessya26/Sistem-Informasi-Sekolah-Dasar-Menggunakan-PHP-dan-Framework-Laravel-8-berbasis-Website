<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            [
                'name' => 'Operator',
                'email' => 'operator@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Admin1',
                'email' => 'admin1@example.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
