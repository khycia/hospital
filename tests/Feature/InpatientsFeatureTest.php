<?php

namespace Tests\Feature;
use App\inpatient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InpatientsFeatureTest extends TestCase
{
    use RefreshDatabase;
     
    public function test_a_user_can_see_a_all_the_inpatients()
    {        
      $inpatients=factory(inpatient::class, 5) ->create();
      $response= $this->get('/inpatients');
      $response->assertStatus(200);
    }
    
     public function test_a_user_can_see_single_inpatients()
    { 
      $inpatients=factory(inpatient::class) ->create();
      $response= $this->get('/inpatients' .$inpatients->patient_id);
      $response->assertSee($inpatients->name);
    }

    public function test_a_user_can_create_a_inpatient()
    {
      $response= $this->get('/inpatients/create');
      $response->assertStatus(200);
      $response->assertSee('Create inpatient');
    }

    public function test_a_user_can_store_new_inpatient()
    {
        $form_fields = factory(inpatient::class)->raw();
        $response = $this->post('/inpatients', $form_fields);
        $this->assertDatabaseHas('inpatients', $form_fields);
        $response->assertRedirect('/inpatients');
    }

    public function test_a_user_can_delete_a_data()
    {
        $inpatient = factory(inpatient::class)->create();
        $this->delete('/inpatients/'.$inpatient->id); 
        $this->assertDatabaseMissing('inpatients',['id'=> $inpatient->id]);
    }

    public function test_a_user_can_update_a_data()
    {
        $inpatient = factory(inpatient::class)->create();
        $inpatient->name = "Updated name";
        $this->post('inpatients/'.$inpatient->id, $inpatient->toArray());
        $this->assertDatabaseHas('inpatients',['id'=> $inpatient->id , 'name' => 'Updated name']);
    }


}
