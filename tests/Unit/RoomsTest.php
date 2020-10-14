<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\withFaker;
use App\Rooms;

class RoomsTest extends TestCase
{
    use RefreshDatabase;

    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function return_patiend_id_and_room_type() {
       $room = factory(Room::class)->create();
       $patiend_id_room = $bill->patient_id.' room '.$room->room;
       $this->assertTrue($patient_id_room == $room->patiend_id_room());
    }
}
