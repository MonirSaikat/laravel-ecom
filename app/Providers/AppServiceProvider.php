<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\NavLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('nav_links', NavLink::all());
        view()->share('brands', Brand::all());
        view()->share('categories', Category::all());
        view()->share('errors', session('errors'));
    }
}
