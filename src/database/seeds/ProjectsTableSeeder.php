<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Project::class, 10)->create();

        //faker呼び出し
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 1; $i <= 10; $i++) {
            Project::create([
                'name' => 'projects_' . $faker->numberBetween($min = 1, $max = 10),
                'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
                'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
                'department_id' => $i,
                'user_id' =>  $i
            ]);
        }
    }
}
