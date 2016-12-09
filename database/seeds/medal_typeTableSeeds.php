<?php

use Illuminate\Database\Seeder;
use App\MedalType;

class medal_typeTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedalType::create([
            'name' => 'Post',
        ]);

        MedalType::create([
            'name' => 'User',
        ]);
    }
}
