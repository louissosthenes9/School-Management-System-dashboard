<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guardian;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Teacher::factory(12)->create();
        Student::factory(40)->has(Guardian::factory()->count(1))->create();


           $this->call([
               SubjectSeeder::class,
               StudentSubjectsSeeder::class,

           ]);

    }
}
