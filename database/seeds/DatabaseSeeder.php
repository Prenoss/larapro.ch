<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlaneSeeder::class);
        $this->call(FlightSeeder::class);
        $this->call(GateSeeder::class);
    }
}
