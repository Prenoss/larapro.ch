<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert(
            [
                [
                    'number' => 4456,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4457,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4458,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4459,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4460,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4461,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4462,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4463,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ],
                [
                    'number' => 4464,
                    'name' => Str::random(7),
                    'passengers' => 150,
                    'refuel_time' => 0.75,
                    'jet' => 1,
                    'propeller' => 0,
                ]
            ]
        );
    }
}
