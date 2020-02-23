<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Product;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph,
        'price' => 100000,
        'status' => 1
    ];
});
