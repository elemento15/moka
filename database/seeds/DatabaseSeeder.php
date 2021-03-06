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
        $this->call(FirstNamesTableSeeder::class);
        $this->call(LastNamesTableSeeder::class);
        $this->call(CitiesStatesTableSeeder::class);
    }
}
