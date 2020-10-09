<?php

use Illuminate\Database\Seeder;
use App/Inpatient;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            ['room_id' => '1A', 'room_type'=> 'Private 1', 'ward'=> 'Pedia'],
            ['room_id' => '2A', 'room_type'=> 'Private 2', 'ward'=> 'ICU'],
            ['room_id' => '3A', 'room_type'=> 'Private 3', 'ward'=> 'Critical'],
            ['room_id' => '4A', 'room_type'=> 'Private 4', 'ward'=> 'Surgery'],
            ['room_id' => '5A', 'room_type'=> 'Private 5', 'ward'=> 'Therapy'],
        ];
        DB::table('rooms')->insert($rooms);
    }
}
