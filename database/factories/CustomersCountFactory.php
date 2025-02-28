<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomersCount>
 */
class CustomersCountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Happy Clients', 'Employees', 'Useful Programs']),
            'count' => fake()->numberBetween(500, 500000),
            'suffix' => fake()->randomElement(['+', 'K+', 'M']),
        ];
    }
}

