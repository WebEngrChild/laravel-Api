<?php

use Illuminate\Database\Seeder;
use App\Career;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Career::class, 10)->create();

        //faker呼び出し
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 1; $i <= 10; $i++) {
            Career::create([
                'name' => 'career_' . $faker->numberBetween($min = 1, $max = 10),
                'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
                'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
                'background_id' => $i
            ]);
        }
    }
}
