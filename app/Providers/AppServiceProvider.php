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
                $categories =  Category::where('category_type', 'ent')->get();
                $blogs = Blog::where('status', '=', '1')->orderBy('created_at', 'desc')->limit(2);
                $opts = Category::where('category_type', 'opt')->get();
                $tech = Category::where('category_type', 'tech')->get();
                $view->with('opts', Category::where('category_type', 'opp')->get(),  'blogs', Blog::all());
                $view->with('categories', Category::where('category_type', 'ent')->get(),);
                $view->with('tech', Category::where('category_type', 'tech')->get());
            }
        );
    }
}
