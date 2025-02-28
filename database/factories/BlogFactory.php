<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Blog;


class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(6),
            'author' => $this->faker->name(),
            'author_name' => $this->faker->name(),
            'content' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(640, 480, 'business', true),
            'tags' => json_encode($this->faker->words(5)),
            'quote' => $this->faker->sentence(),
            'quote_author' => $this->faker->name(),
            'published_at' => $this->faker->date(),
            'meta_description' => $this->faker->sentence(20),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Blog $service) {
            // Attach random categories to service
            $categories = Category::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $service->categories()->attach($categories);
        });
    }
}

