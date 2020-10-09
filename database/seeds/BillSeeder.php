<?php

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bills [
        	['receipt_number' => '1', 'patient_id' =>'6','doctor_id' => '11','nurse_id' => '16','healthcare_type'=> 'Primary', 'discount'=> '10', 'room_charge'=> '1000', 'no_of_days'=> '10', 'lab_charge'=> '500'],
        	['receipt_number' => '2','patient_id' => '7','doctor_id' => '12','nurse_id' => '17','healthcare_type'=> 'Secondary', 'discount'=> '20', 'room_charge'=> '2000', 'no_of_days'=> '20', 'lab_charge'=> '1000'],
        	['receipt_number' => '3','patient_id' => '8','doctor_id' => '13','nurse_id' => '18','healthcare_type'=> 'Tertiary', 'discount'=> '30', 'room_charge'=> '3000', 'no_of_days'=> '30', 'lab_charge'=> '600'],
        	['receipt_number' => '4','patient_id' => '9','doctor_id' => '14','nurse_id' => '19','healthcare_type'=> 'Senior', 'discount'=> '40', 'room_charge'=> '4000', 'no_of_days'=> '35', 'lab_charge'=> '1500'],
        	['receipt_number' => '5','patient_id' => '10','doctor_id' => '15','nurse_id' => '20','healthcare_type'=> 'Minor', 'discount'=> '50', 'room_charge'=> '5000', 'no_of_days'=> '25', 'lab_charge'=> '3000'],


        ];
        DB::tables('bills')->insert($bills);

        
    }
}
