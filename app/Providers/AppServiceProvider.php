<?php

namespace App\Providers;

use App\Model\Image;
use App\Model\Category;
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
        /**
         * t goọ o day roi no sẽ duùg cho tat ca cac view luon vao view chỉ can $categories la dunn dươc
         * okay
         */
        view()->composer(['*'], function($view){
            $categories = Category::all();
            $view->with('categories', $categories);
        });
        view()->composer('module.images.model', function($view){
            $images = Image::all();
            $view->with('images', $images);
        });
    }
}
