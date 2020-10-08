<?php

use Illuminate\Database\Seeder;

Use App\inpatient;
class inpatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inpatients = Inpatient::all();
        foreach($inpatients as $inpatient) {
         	for($random_number = mt_rand(3,5); $random_number > 0; $random_number--) {
         		inpatient::create([
                'name' => 'name' .mt_rand(10,100),
                'diagnosis' => 'diagnosis' .mt_rand(1,10),
                 'room_number' => 'room_number' .mt_rand(1,10000)
   
   
  


         		]);





        	}
        }
    }
}
