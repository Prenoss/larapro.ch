<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gates')->insert(
            [
                [
                    'number' => 456,
                    'flight_id' => 1,
                    'size' => 'small',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 457,
                    'flight_id' => 2,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 458,
                    'flight_id' => 3,
                    'size' => 'small',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 459,
                    'flight_id' => 4,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 460,
                    'flight_id' => 5,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 461,
                    'flight_id' => 6,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 462,
                    'flight_id' => 7,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ],
                [
                    'number' => 463,
                    'flight_id' => 8,
                    'size' => 'big',
                    'free' => 1,
                    'international' => 1,
                ]
            ]
        );
    }
}
