<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;


class PortfolioFactory extends Factory {
    protected $model = Portfolio::class;

    public function definition(): array {
        return [
            'title' => $this->faker->sentence(3),
            'sub_title' => $this->faker->sentence(3),
            'image' => 'portfolio-' . rand(7, 12) . '.png', // Mock images
            'designation' => $this->faker->jobTitle(),
            'detail_image' => 'portfolio_detail-' . rand(7, 12) . '.png', // Mock images
            'client' => $this->faker->name(),
            'category' => $this->faker->word(),
            'date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), // 🆕 Assign Random Category
            // 🆕 Randomly Generated Page Content
            'page_content' => $this->faker->paragraphs(3, true),
        ];
    }
}
