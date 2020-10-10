<?php

use Illuminate\Database\Seeder;

use App\Patient;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = Patient::create([
        	'patient_type' => '1',
            'name' => 'Juan DelaCruz',
            'gender' => 'Male',             
            'date_of_birth' => '2020-01-01',
            'contact' => '111222',
            'diagnosis' => 'Asthma',
            'healthcare_type' => '1',
            'doctor_id' => '1',
            'nurse_id' => '1'
        ]);
    }
}
