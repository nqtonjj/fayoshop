<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Image;
use App\Model\Products;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'price' => random_int(0, 100),
        'sale_price' => random_int(0, 100),
        'is_new' => (bool)random_int(0, 1),
        'is_hot' => (bool)random_int(0, 1),
        'image_id' => Image::all()->random()->id,
        'size' => $faker->unique()->name,
        'category_id' => Category::all()->random()->id
    ];
});
