<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FooterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'logo' => 'assets/images/logo/logo-02.svg',
            'description' => $this->faker->sentence(),
            'working_days' => 'Sunday - Friday',
            'working_hours' => '9:00 AM – 8:00 PM',
            'copyright_text' => '© Copyright 2024. All Rights Reserved by Bizper',
        ];
    }
}
