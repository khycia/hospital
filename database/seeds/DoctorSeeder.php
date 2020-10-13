<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $doctors [
        	['name' => 'Doctor 1'. 'contact' =>'1234'.'position' => 'Senior','department' => 'ER'],
        	['name' => 'Doctor 2'.'contact' => '12345'.'position' => 'Intern','department' => 'GS'],
        	['name' => 'Doctor 3'.'contact' => '123456'.'position' => 'Senior','department' => 'OP WARD'],
        	['name' => 'Doctor 4'.'contact' => '1234567'.'position' => 'Intern','department' => 'Medical Assistant'],
        	['name' => 'Doctor 5'.'contact' => '12345678'.'position' => 'Senior','department' => 'General Surgeon'],


        ];
        DB::tables('doctors')->insert($doctors);

        

    }
}
