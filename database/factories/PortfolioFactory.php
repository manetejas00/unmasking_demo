<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory {
    protected $model = Portfolio::class;

    public function definition(): array {
        return [
            'title' => $this->faker->sentence(3),
            'sub_title' => $this->faker->sentence(3),
            'image' => 'portfolio-' . rand(7, 12) . '.png', // Mock images
            'designation' => $this->faker->jobTitle(),
        ];
    }
}

