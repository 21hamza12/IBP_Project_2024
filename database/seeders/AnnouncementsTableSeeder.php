<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'title' => 'Announcement 1',
                'content' => 'Welcome to the new academic year!',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 2',
                'content' => 'You can do the payment for academic year 2024 - 2024 from 01/09 to 15/09',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 3',
                'content' => 'Midterm exams schedule is now available.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 4',
                'content' => 'A make-up lecture on Internet Based Programming will take place next week.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 5',
                'content' => 'You can check your exam papers until 05/02/2025.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 6',
                'content' => 'Final exams schedule is now available.',
                'created_at' => now(),
            ],
            
        ];

        foreach ($announcements as $announcement) {
            DB::table('announcements')->insert($announcement);
        }
    }
}
