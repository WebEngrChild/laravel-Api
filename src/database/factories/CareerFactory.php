<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Career;
use Faker\Generator as Faker;

$factory->define(Career::class, function (Faker $faker) {
    // return [
    //     'name' => 'career_' . $faker->numberBetween($min = 1, $max = 10),
    //     'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    //     'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    //     'background_id' => $faker->randomElement([
    //         1,
    //         2,
    //         3,
    //         4,
    //         5,
    //     ]),
    // ];
});
