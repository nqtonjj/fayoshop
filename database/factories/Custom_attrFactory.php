<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Custom_attributes;
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

$factory->define(Custom_attributes::class, function (Faker $faker) {
    return [
        'label' => $faker->name,
        'value' => $faker->name,
        'price' => random_int(0, 100),
        'products_id' => Products::all()->random()->id
    ];
});
