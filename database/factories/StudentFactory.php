<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [

              'name' => fake()->name(),
              'email'=> fake()->unique()->email(),
              'phone'=> fake()->phoneNumber(),
              'city'=> fake()->city(),
              'age' => fake()->numberBetween(10,30) 
              
            //
        ];
    }
}
