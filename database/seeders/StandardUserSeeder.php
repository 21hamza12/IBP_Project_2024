<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StandardUserSeeder extends Seeder
{

    public function run()
    {
        \DB::table('users')->insert([
        [
            'name' => '	Ahmet Omar',
            'email' => 'ahmet@outlook.com',
            'email_verified_at' => now(),
            'password' => Hash::make('20232024'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'standard',
            'is_admin' => 0,
        ],
        [
            'name' => 'Yahya Amar Abdi',
            'email' => 'Yahya@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('20232024'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'standard',
            'is_admin' => 0,

        ],
        [
            'name' => 'Oughba Amar Abdi',
            'email' => 'oughba@facebook.com',
            'email_verified_at' => now(),
            'password' => Hash::make('20232024'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'standard',
            'is_admin' => 0,

        ],
    ]);

    }
}

