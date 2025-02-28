<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;
use App\Models\Banner;
use App\Models\CustomersCount;
use App\Models\WorkProcess;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if a user exists before creating a new one
        if (!User::exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'admin@admin.com',
            ]);
            $this->command->info('User created successfully.');
        } else {
            $this->command->info('User already exists. Skipping user creation.');
        }

        // Seed other tables regardless of user presence
        if (Banner::count() == 0) {
            Banner::factory()->count(6)->create();
        }

        if (Category::count() == 0) {
            Category::factory()->count(6)->create();
        }

        if (Service::count() == 0) {
            Service::factory()->count(6)->create();
        }

        if (CustomersCount::count() == 0) {
            CustomersCount::factory()->count(6)->create();
        }

        if (WorkProcess::count() === 0) {
            WorkProcess::factory()->count(6)->create();
        }

        if (\App\Models\AboutSection::count() === 0) {
            \App\Models\AboutSection::factory(6)->create();
        }

        if (\App\Models\Portfolio::count() === 0) {
            \App\Models\Portfolio::factory(6)->create();
        }
        if (\App\Models\Faq::count() === 0) {
            \App\Models\Faq::factory(6)->create();
        }
        if (\App\Models\Team::count() === 0) {
            \App\Models\Team::factory(6)->create();
        }
        if (\App\Models\Testimonial::count() === 0) {
            \App\Models\Testimonial::factory(6)->create();
        }
        if (\App\Models\Brand::count() === 0) {
            \App\Models\Brand::factory(6)->create();
        }
        if (\App\Models\ContactMessage::count() === 0) {
            \App\Models\ContactMessage::factory(6)->create();
        }
        if (\App\Models\Blog::count() === 0) {
            \App\Models\Blog::factory(6)->create();
        }
        if (\App\Models\Footer::count() === 0) {
            \App\Models\Footer::factory()->create();
        }

    }
}
