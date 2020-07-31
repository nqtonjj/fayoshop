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
        /**
         * t goọ o day roi no sẽ duùg cho tat ca cac view luon vao view chỉ can $categories la dunn dươc
         * okay
         * t đăng ký biến globo ở đây rồi
         * biến đùng chung á
         * còn cái brand của m làm gì có đăng ký biến globo
         * ma 2 tieng cuoc doi, thi ra o day :(, so sad
         *
         * ~~
         * ma m chi t cai replasionship di, :v t lam kieu kia thay ngu ngu
         * mở đi
         */
        view()->composer(['*'], function($view){
            $categories = Category::all();
            $view->with('categories', $categories);
        });

        view()->composer(['*'], function($view){
            $brand = Brand::all();
            $view->with('brand', $brand);
        });

        view()->composer('module.images.model', function($view){
            $images = Image::all();
            $view->with('images', $images);
        });

    }
}
