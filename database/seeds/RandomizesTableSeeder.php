<?php

use App\Randomize;
use Illuminate\Database\Seeder;

class RandomizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Randomize::truncate();
    }
}
