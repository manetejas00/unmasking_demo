<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;
use App\Models\Category;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => 'services/sample.jpg', // Update with actual image path
            'features' => [
                'Instant Business Growth',
                'Expert Team Members',
                'Easy Customer Service',
                '24/7 Quality Service'
            ],
            'page_content' => $this->faker->paragraphs(3, true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Service $service) {
            // Attach random categories to service
            $categories = Category::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $service->categories()->attach($categories);
        });
    }
}


