<?php

use Illuminate\Database\Seeder;
class OutpatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default var

      $outpatients = [
        	['name' => 'Jeff', 'diagnosis' => 'Diabetes6' ],
            ['name' => 'Jeff2', 'diagnosis' => 'Diabetes5' ],
            ['name' => 'Jeff3', 'diagnosis' => 'Diabetes4' ],
            ['name' => 'Jeff4', 'diagnosis' => 'Diabetes3' ],
            ['name' => 'Jeff5', 'diagnosis' => 'Diabetes2' ],
	
        ];
        DB::table('outpatients')->insert($outpatients);
    }
}
