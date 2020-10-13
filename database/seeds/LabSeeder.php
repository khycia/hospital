<?php

use Illuminate\Database\Seeder;
use App\Lab;
use App\Nurses;
class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //public function run()
    {
        //
        $lab = [
            ['date' => '12202020', 'amount'=>'1'],
          
    	$lab->date = request()->date;
    	$lab->amount = request()->amount;
        ];
        DB::table('labs')->insert($lab);

   }
    }
}
