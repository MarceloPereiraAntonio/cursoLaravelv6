<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->unique()->word,
        'valor'=>12.2,
        'description'=> $faker->sentence(),
    ];
});
