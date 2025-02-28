<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'designation' => $this->faker->jobTitle(),
            'image' => 'assets/images/team/team-' . $this->faker->numberBetween(1, 5) . '.png',
            'facebook' => 'https://facebook.com/' . $this->faker->userName(),
            'linkedin' => 'https://linkedin.com/in/' . $this->faker->userName(),
            'twitter' => 'https://twitter.com/' . $this->faker->userName(),
        ];
    }
}

