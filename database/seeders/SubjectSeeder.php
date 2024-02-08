<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['name' => 'Mathematics', 'description' => 'Introduction to mathematics'],
            ['name' => 'Physics', 'description' => 'Introduction to physics'],
            ['name' => 'Biology', 'description' => 'Introduction to biology'],
            ['name' => 'Geography', 'description' => 'Introduction to Geography'],
            ['name' => 'English', 'description' => 'Introduction to English'],
            ['name' => 'literature', 'description' => 'Introduction to lit'],
            ['name' => 'kiswahili', 'description' => 'Introduction to kiswahili'],
            ['name' => 'chemistry', 'description' => 'Introduction to chemistry']
        

        ];

        foreach ($courses as $course) {
            Subject::create($course);
        }
    }
}
