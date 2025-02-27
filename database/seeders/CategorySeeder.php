<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Business Solution',
            'Strategy Growth',
            'Finance Solution',
            'Investment Policy',
            'Tax Management'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
