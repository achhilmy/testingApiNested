<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'product_id' => function() {
            return factory(App\Product::class)->create()->id;
        },
        'comment' => $faker->sentence,
    ];
});
