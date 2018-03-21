<?php

use Faker\Generator as Faker;

$factory->define(App\UserVotes::class, function (Faker $faker) {
    return [
        'poll_id'=>$faker->numberBetween(1, 100),
        'answer_id'=>$faker->numberBetween(1, 100),
        'user_id'=>$faker->numberBetween(1, 200),
        'choice_selected'=>$faker->boolean(true),
    ];
});
