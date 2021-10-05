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
        factory(Career::class, 20)->create();
    }
}
