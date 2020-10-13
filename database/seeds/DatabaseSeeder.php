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
        // $this->call(UserSeeder::class);

        $this->call([RoomsTableSeeder::class]);
        $this->call([HealthcaresTableSeeder::class]);
        $this->call([NursesSeeder::class ,LabSeeder::class]);
        $this->call([patientSeeder::class,UserSeeder::class]);
    }
}
