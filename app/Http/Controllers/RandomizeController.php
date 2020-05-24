<?php

namespace App\Http\Controllers;

use App\Randomize;

class RandomizeController extends Controller
{

    public function retrieve(Randomize $randomize)
    {
        return $randomize;
    }

    public function generate()
    {
        $faker = \Faker\Factory::create();
        $random = Randomize::create([
            'numbers' => $faker->randomNumber()
        ]);
        return response()->json($random,201);
    }
}
