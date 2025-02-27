<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(1200, 400, 'business', true, 'banner'), // ✅ Fake image URL
            'video_link' => 'https://www.youtube.com/watch?v=' . $this->faker->regexify('[A-Za-z0-9]{11}'),
            'button_text' => 'Learn More',
            'button_link' => 'https://example.com',
            'sort_order' => 1,
            'is_active' => true,
        ];
    }
}
