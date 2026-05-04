<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Video Editing Mastery',
            'description' => 'Belajar editing dari nol',
        ]);

        Course::create([
            'title' => 'Generative AI',
            'description' => 'Belajar AI dari dasar',
        ]);
    }
}
