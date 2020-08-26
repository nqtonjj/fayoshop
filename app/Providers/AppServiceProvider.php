<?php

namespace App\Providers;

use App\Model\Image;
use App\Model\Category;
use App\Brand;
use App\Model\Products;
use App\Role;
use App\Slide;
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

        view()->composer(['*'], function ($view) {
            $categories = Category::all();

            $view->with('categories', $categories);
        });

        view()->composer(['*'], function ($view) {
            $brands = Brand::all();
            $view->with('brands', $brands);
        });

        view()->composer(['*'], function ($view) {
            $roles = Role::all();
            $view->with('roles', $roles);
        });


        view()->composer(['module.images.model-single', 'module.images.model-multi'], function ($view) {
            $images = Image::all();
            $view->with('images', $images);
        });
        view()->composer('module.images.model-slide', function ($view) {
            $slides = Slide::with('image')->where('slider_id', null)->get();
            $view->with('slides', $slides);
        });
    }
}
