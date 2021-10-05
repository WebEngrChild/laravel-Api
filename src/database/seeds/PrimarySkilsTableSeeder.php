<?php

use Illuminate\Database\Seeder;
use App\PrimarySkil;

class PrimarySkilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimarySkil::class, 20)->create();
    }
}
