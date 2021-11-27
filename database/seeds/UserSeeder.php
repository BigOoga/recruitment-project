<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'last_name' => 'Ruffi',
            'email' => 'edoardo.ruffi@gmail.com',
            'password' => Hash::make('password'),
            'api_token' => Str::random(80),
        ]);

        DB::table('users')->insert([
            'name' => 'Andrea',
            'last_name' => 'P.',
            'email' => 'andrea.p@gmail.com',
            'password' => Hash::make('password'),
            'api_token' => Str::random(80),
        ]);

        DB::table('users')->insert([
            'name' => 'Matteo',
            'last_name' => 'G.',
            'email' => 'matteo.g@gmail.com',
            'password' => Hash::make('password'),
            'api_token' => Str::random(80),
        ]);

        DB::table('users')->insert([
            'name' => 'Max',
            'last_name' => 'B.',
            'email' => 'max.b@gmail.com',
            'password' => Hash::make('password'),
            'api_token' => Str::random(80),
        ]);
    }
}
