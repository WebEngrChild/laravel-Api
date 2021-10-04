<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Career;
use App\Background;
use Faker\Generator as Faker;

$factory->define(Career::class, function (Faker $faker) {
    return [
        'name' => 'career_' . $faker->numberBetween($min = 1, $max = 3),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'background_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
