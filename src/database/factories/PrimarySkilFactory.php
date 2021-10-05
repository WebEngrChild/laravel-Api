<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PrimarySkil;
use Faker\Generator as Faker;

$factory->define(PrimarySkil::class, function (Faker $faker) {
    // return [
    //     'name' => 'primary_skils_' . $faker->numberBetween($min = 1, $max = 10),
    //     'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    //     'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    //     'user_id' => $faker->randomElement([
    //         1,
    //         2,
    //         3,
    //         4,
    //         5,
    //         6,
    //         7,
    //         8,
    //         9,
    //         10,
    //     ]),
    // ];
});
