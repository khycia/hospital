<?php

use Illuminate\Database\Seeder;
use App\Outpatients;
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
 $outpatients = Outpatients::all();
        foreach($outpatients as $outpatient) {
         	for($random_number = mt_rand(3,5); $random_number > 0; $random_number--) {
         		outpatients::create([
                'name' => 'name' .mt_rand(10,100),
                'diagnosis' => 'diagnosis' .mt_rand(1,10),
                 'lab_number' => '000-' .mt_rand(1,100)
      ] );

           }
        }
     }
  }

       
 
