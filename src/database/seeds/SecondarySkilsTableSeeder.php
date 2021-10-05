<?php

use Illuminate\Database\Seeder;
use App\SecondarySkil;

class SecondarySkilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondarySkil::class, 20)->create();
    }
}
