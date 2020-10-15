<?php

namespace Tests\Feature;

use App\Nurses;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NursesFeatureTest extends TestCase
{
  
 use RefreshDatabase;
     /** @test */
    {
        //given
        $nurses = factory(Nurse::class)->create();
        //when
        $response = $this->get('/nurses');
        //then
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_a_single_nurse()
    {
        //given
        $nurse = factory(Guest::class)->create();
        //when
        $response = $this->get('/nurses/'.$nurse->id);
        //then
        $response->assertSee($nurse->first_name.' '.$nurse->last_name);
    }

    /** @test */
    public function a_user_can_create_a_nurse()
    {
        $response = $this->get('/nurses/create');
        $response->assertSee('Create Nurses');
    }

    /** @test */
    public function a_user_can_store_a_new_nurse()
    {   
        $form_fields = factory(Guest::class)->raw();
        $response = $this->post('/nurses', $form_fields);
        $this->assertDatabaseHas('nurses', $form_fields);
        $response->assertRedirect('/nurses');
    }

    /** @test */
    public function a_user_can_edit_nurses_details()
    {   
        $nurse = factory(Nurse::class)->create();
        $response = $this->get('/nurses/'.$nurse->id.'/edit');
        $response->assertSee('Update Nurses');
    }

    /** @test */
    public function a_user_can_update_nurses_details()
    {   
        $nurse= factory(Guest::class)->create();
        $nurse->first_name = "Test";
        $nurse->last_name = "Ing";
        $nurse->contact_number = "090969696902";
        $nurse->email = "testing@test.com"; 
        $response = $this->put('/nurses/'.$nurse->id, $nurse->toArray());
        $this->assertDatabaseHas('nurses', ['id' => $nurse->id, 'first_name' => 'Test', 'last_name' => 'Ing',
            'contact_number' => '090969696902', 'email' => 'testing@test.com']);
        $response->assertRedirect('/nurses/'.$nurse->id);
    }

    /** @test */
    public function a_user_can_delete_a_nurse()
    {   
        $nurse = factory(Nurse::class)->create();
        $response = $this->delete('/nurses/'.$nurse->id);
        $this->assertDatabaseMissing('nurses', ['id'=> $nurse->id]);
        $response->assertRedirect('/nurses');
    }





}