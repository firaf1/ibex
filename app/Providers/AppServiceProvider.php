<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer(
            'layouts.homeLayout', 
            function ($view) {
                $categories =  Category::all();
                $blogs = Blog::where('status', '=', '1')->orderBy('created_at', 'desc')->limit(2);
                $view->with('categories', Category::all(), 'blogs', Blog::all());
            }
        );
    }
}
