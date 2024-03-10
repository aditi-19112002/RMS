<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'father' =>fake()->name(),
            'contact' =>fake()->phoneNumber(),
            'school_name' =>fake()->company(),
            'maths' =>fake()->numberBetween(30,100),
            'science' =>fake()->numberBetween(30,100),
            'sst' =>fake()->numberBetween(30,100),
            'english' =>fake()->numberBetween(30,100),
            'hindi' =>fake()->numberBetween(30,100)
            
        ];
    }
}
