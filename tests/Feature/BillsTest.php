<?php

namespace Tests\Feature;

use App\Bills;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BillsTest extends TestCase
{
    use RefreshDatabase;

    public function user_can_see_a_all_the_bills()
    {        
      $bills=factory(bill::class, 5) ->create();
      $response= $this->get('/bills');
      $response->assertStatus(200);
    }

     public function user_can_see_single_bills()
    { 
      $bills=factory(bill::class) ->create();
      $response= $this->get('/bills' .$bills->receipt_number);
      $response->assertSee($bills->name);
    }

    public function user_can_create_a_bill()
    {
      $response= $this->get('/bills/create');
      $response->assertStatus(200);
      $response->assertSee('Create bill');
    }

    public function user_can_store_new_bill()
    {
        $form_fields = factory(bill::class)->raw();
        $response = $this->post('/bills', $form_fields);
        $this->assertDatabaseHas('bills', $form_fields);
        $response->assertRedirect('/bills');
    }

    public function user_can_delete_a_data()
    {
        $bill = factory(bill::class)->create();
        $this->delete('/bills/'.$bill->id); 
        $this->assertDatabaseMissing('bills',['id'=> $bill->id]);
    }

    public function user_can_update_a_data()
    {
        $bill = factory(bill::class)->create();
        $bill->patient_id = "Updated patient_id";
        $this->post('bills/'.$bill->id, $bill->toArray());
        $this->assertDatabaseHas('bills',['id'=> $bill->id , 'patient_id' => 'Updated patient_id']);
    }
}
