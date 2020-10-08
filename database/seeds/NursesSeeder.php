<?php

use Illuminate\Database\Seeder;
use App\Nurses;
use App\Lab;

class NursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //
        $nurses [
        	['name' => 'Nurse 1', 'contact_number' =>'0912312123','department' => 'ER'],
        	['name' => 'Nurse 2','contact_number' => '0912313123','department' => 'GS'],
        	['name' => 'Nurse 3','contact_number' => '0918141233','department' => 'OP WARD'],
        	['name' => 'Nurse 4','contact_number' => '0941241133','department' => 'Medical Assistant'],
        	['name' => 'Nurse 5','contact_number' => '0921312313','department' => 'General Surgeon'],


        ];
        DB::tables('nurses')->insert($nurses);

    }
}
