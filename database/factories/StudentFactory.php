<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // In your UsersFactory.php (or standalone factory)

    public function birthdateBetween2000And2006()
    {

        $minYear = 2000;
        $maxYear = 2006;

        // Randomly generate year within the range
        $year = rand($minYear, $maxYear);

        // Use Faker to generate random date within selected year
        return $this->faker->dateTimeBetween("$year-01-01", "$year-12-31")->format('Y-m-d');
    }


    public function definition(): array
    {
        return [
            "first_name"=> fake()->firstName(),
            "middle_name"=>fake()->lastName(),
            "last_name"=>fake()->lastName(),
            "sex"=>$this->faker->randomElement(['M','F']),
            "birth_day"=>$this->birthdateBetween2000And2006(),
            "email" => fake()->unique()->safeEmail(),
            "Academic_year"=>$this->faker->randomElement([1,2,3,4]),
            "Mobile-no"=>fake()->phoneNumber(),
            "password"=>fake()->password()
        ];
    }
}
