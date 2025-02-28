<?php

namespace Database\Factories;

use App\Models\WorkProcess;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkProcessFactory extends Factory
{
    protected $model = WorkProcess::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'image' => 'assets/images/services/services-round-' . $this->faker->numberBetween(1, 3) . '.png',
            'step_number' => $this->faker->unique()->numberBetween(1, 10),
        ];
    }
}

