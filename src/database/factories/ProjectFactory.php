<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => 'projects_' . $faker->numberBetween($min = 1, $max = 10),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'department_id' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
