<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert(
            [
                [
                    'number' => 8566,
                    'plane_id' => 1,
                    'starting' => Carbon::now(),
                    'landing' => Carbon::now()->add(1, 'day')
                ],
                [
                    'number' => 8567,
                    'plane_id' => 2,
                    'starting' => Carbon::now()->add(1, 'day'),
                    'landing' => Carbon::now()->add(2, 'day')
                ],
                [
                    'number' => 8568,
                    'plane_id' => 3,
                    'starting' => Carbon::now()->add(3, 'day'),
                    'landing' => Carbon::now()->add(4, 'day')
                ],
                [
                    'number' => 8569,
                    'plane_id' => 4,
                    'starting' => Carbon::now()->add(5, 'day'),
                    'landing' => Carbon::now()->add(6, 'day')
                ],
                [
                    'number' => 8570,
                    'plane_id' => 5,
                    'starting' => Carbon::now()->add(5, 'day'),
                    'landing' => Carbon::now()->add(6, 'day')
                ],
                [
                    'number' => 8571,
                    'plane_id' => 6,
                    'starting' => Carbon::now()->add(5, 'day'),
                    'landing' => Carbon::now()->add(6, 'day')
                ],
                [
                    'number' => 8572,
                    'plane_id' => 7,
                    'starting' => Carbon::now()->add(5, 'day'),
                    'landing' => Carbon::now()->add(6, 'day')
                ],
                [
                    'number' => 8573,
                    'plane_id' => 8,
                    'starting' => Carbon::now()->add(5, 'day'),
                    'landing' => Carbon::now()->add(6, 'day')
                ]
            ]
        );
    }
}
