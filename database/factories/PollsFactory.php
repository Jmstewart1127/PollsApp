<?php

use Faker\Generator as Faker;

$factory->define(App\Polls::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 200),
        'title' => $faker->title,
    ];
});
