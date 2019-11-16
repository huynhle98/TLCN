<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20),
        'price' => $faker->randomFloat(0,1000,100000),
        'area' => $faker->randomFloat(0,10,1000),
        'address' => $faker->address,
        'description' => $faker->realText(60),
    ];
});
