<?php

namespace Tests\Feature;

use App\Outpatients;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OutpatientsTest extends TestCase
{
     use RefreshDatabase;
      /** @test */
        public function a_user_can_see_all_the_outpatients()
        {
       
         //given
         $outpatients = factory(Outpatients::class,5)-> create();


         //when
          $response = $this->get('/outpatients');
        // then

          $response->assertStatus(200);
          $response->assertSee($outpatients[0]->last_name);

        }
    /** @test */
        public function a_user_can_see_a_single_outpatient()
        {
             $outpatients = factory(Outpatients::class)-> create();
             $response = $this->get('/outpatients/' .$outpatients->id);
             $response->assertSee($outpatients->last_name);
    

        }
            /** @test */
        public function a_user_create_a_outpatients()
        {

        

         //when
          $response = $this->get('/outpatients/create');
        // then

         
          $response->assertSee('Create a Outpatients');


        }
         /** @test */
        public function a_user_store_a_new_outpatients() {
      

         
         
         $form_fields= factory(Outpatients::class)->raw();
    
     //when
$response = $this->post('/outpatients', $form_fields);

//then
$this->assertDatabaseHas('outpatients', $form_fields);
    }

/** @test */
    public function testDelete()
{
    $response = $this->call('DELETE', '/outpatients/{id}');

    $this->assertEquals(200, $response->getStatusCode());
}
}

