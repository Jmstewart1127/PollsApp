<?php

use Faker\Generator as Faker;

$factory->define(App\Choices::class, function (Faker $faker) {
    return [
        'poll_id'=>$faker->numberBetween(1, 200),
        'choice_title'=>$faker->name,
        'number_of_votes'=>$faker->numberBetween(1, 100)
    ];
});
