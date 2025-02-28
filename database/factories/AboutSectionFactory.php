<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AboutSection;

class AboutSectionFactory extends Factory
{
    protected $model = AboutSection::class;

    public function definition(): array
    {
        return [
            'title' => 'Find out more about our business Construction',
            'description' => $this->faker->paragraph(4),
            'image' => 'assets/images/about/about-2.jpg', // Change this to an actual storage path
            'completed_work' => 3025,
            'consulting_service' => 85,
            'finance_consulting' => 66,
        ];
    }
}

