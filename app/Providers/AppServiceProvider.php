<?php

namespace App\Providers;

use App\Model\Image;
use App\Model\Category;
use App\Brand;
use App\Model\Products;
use Illuminate\Support\ServiceProvider;

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

        view()->composer(['*'], function($view){
            $categories = Category::all();

            $view->with('categories', $categories);
        });

        view()->composer(['*'], function($view){
            $brands = Brand::all();
            $view->with( 'brands', $brands);
        });


        view()->composer('module.images.model', function($view){
            $images = Image::all();
            $view->with('images', $images);
        });

    }
}
