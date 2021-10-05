<?php

use Illuminate\Database\Seeder;
use App\Background;

class BackgroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Background::class, 10)->create();
    }
}
