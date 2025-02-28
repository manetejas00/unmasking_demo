<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Footer;
use Illuminate\Support\Facades\Schema;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Check if the table exists before querying
        $footerData = Schema::hasTable('footers') ? Footer::first() : null;
        View::share('footerData', $footerData);
    }
}
