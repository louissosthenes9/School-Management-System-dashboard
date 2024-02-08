<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $students= Student::all();
       $subjects= Subject::all();
        foreach ($students as $student) {
            foreach ($subjects as $subject) {
                $testScore = rand(20, 100); // Generate a random test score between 50 and 100
                $student->subjects()->sync([rand(1,8)=>['test_score' => $testScore]]);
            }
        }

    }
}
