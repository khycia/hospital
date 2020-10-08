<?php

use Illuminate\Database\Seeder;
use App\Patient;
use App\inpatient;

class InpatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $inpatients = [
            ['patient_id' => '1', 'name'=> 'patient1', 'diagnosis'=> 'Headache','room_number'=>'1'],
            ['patient_id' => '2', 'name'=> 'patient2', 'diagnosis'=> 'LBM','room_number'=>'2'],
            ['patient_id' => '3', 'name'=> 'patient3', 'diagnosis'=> 'Diabetes','room_number'=>'3'],
            ['patient_id' => '4', 'name'=> 'patient4', 'diagnosis'=> 'Anxiety','room_number'=>'4'],
            ['patient_id' => '5', 'name'=> 'patient5', 'diagnosis'=> 'Obesity','room_number'=>'5']
        ];
        DB::table('inpatients')->insert($inpatients);

   }
}
