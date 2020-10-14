<?php

namespace Tests\Feature;

use App\Rooms;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function a_user_can_see_all_rooms () {
        $user = factory(Room::class, 5)->create();
        $response = $this->get('/showrooms');
        $response = assertStatus(200);
    }

    public function a_user_can_create_a_room() {
        $response = $this->get('/rooms/create');
        $response->assertStatus(200);
        $response->assertSee('Create Room');
    }

    public function a_user_can_update_a_room() {
        $room = factory(Room::class)->create();
        $room->room_type = "Updated room_type";
        $this->post('rooms/'.$room->id, $room->toArray());
        $this->assertDatabaseHas('rooms' , ['id'=>$room->id , 'room_type'=>'Updated room_type']);
    }

    public function a_user_can_delete_a_room() {
        $room = factory(Room::class)->create();
        $this->delete('/rooms/'.$room->id); 
        $this->assertDatabaseMissing('rooms' , ['id'=>$room->id]);
    }
}
