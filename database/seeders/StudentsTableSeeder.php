<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'name' => '	Sidi Ahmed',
                'email' => 'sidi@gmail.com',
                'department' => 'Computer Science',
            ],
            [
                'name' => 'Mohamed Mohamed Lemin',
                'email' => 'lemin@lemin.com',
                'department' => 'Biologie',
            ],
            [
                'name' => 'Vale Amar Abdi',
                'email' => 'vale@live.fr',
                'department' => 'Mathematics',
            ],
            [
                'name' => 'Dahmani Amar Abdi',
                'email' => 'dahmani@yahoo.com',
                'department' => 'Military',
            ],
            [
                'name' => 'Mariem Amar Abdi',
                'email' => 'mariem@email.com',
                'department' => 'Sciences',
            ],
            [
                'name' => 'Sidi Mohamed Amar Abdi',
                'email' => 'hameme@nasa.com',
                'department' => 'Computer Engineering',
            ],
        ]);


    }
}
