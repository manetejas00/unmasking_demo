<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => 'assets/images/services/details-large.png',
            'features' => [
                'Instant Business Growth',
                'Expert Team Members',
                'Easy Customer Service',
                '24/7 Quality Service'
            ],
        ];
    }
}
