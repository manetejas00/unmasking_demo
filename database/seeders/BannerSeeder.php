<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;


class BannerSeeder extends Seeder
{
    public function run()
    {
        DB::table('banners')->truncate();
        Banner::factory(5)->create();
    }
}

