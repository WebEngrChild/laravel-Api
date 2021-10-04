<?php

use App\Background;
use Illuminate\Database\Seeder;

class BackgroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Background::class, 20)->create();
    }
}
