<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('components.front-header-component', function ($view) {
            $view->with(
                'categories',
                Category::withCount('products')->get()
            );
        });
        View::composer('*', function ($view) {

            $languages = Language::where('is_active', true)
                ->orderBy('order')
                ->get();

            $segments = request()->segments();
            $cleanPath = isset($segments[1])
                ? '/' . implode('/', array_slice($segments, 1))
                : '/';

            $view->with(compact('languages', 'cleanPath'));
        });
    }
}
