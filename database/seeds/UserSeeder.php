<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
>>>>>>> 63f748b624877e3c2790154669a870bb537179e5

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
            'name' => 'Edoardo',
            'email' => 'edoardo.ruffi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Andrea',
            'email' => 'andrea.p@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
