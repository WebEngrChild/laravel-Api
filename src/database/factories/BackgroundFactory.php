<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Background;
use Faker\Generator as Faker;

$factory->define(Background::class, function (Faker $faker) {
    return [
        'name' => 'background_' . $faker->numberBetween($min = 1, $max = 5),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
