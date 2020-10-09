<?php

use Illuminate\Database\Seeder;

class HealthcaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $healthcares = [
            ['healthcare_id' => '1A1', 'title'=> 'Primary', 'discount'=> '50'],
            ['healthcare_id' => '2A2', 'title'=> 'Senior', 'discount'=> '40'],
            ['healthcare_id' => '3A3', 'title'=> 'Secondary', 'discount'=> '30'],
            ['healthcare_id' => '4A4', 'title'=> 'Tertiary', 'discount'=> '10'],
            ['healthcare_id' => '5A5', 'title'=> 'Minor', 'discount'=> '15'],
        ];
        DB::table('healthcares')->insert($healthcares);
    }
}
