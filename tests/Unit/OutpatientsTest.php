<?php

namespace Tests\Unit;

use App\Outpatients;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\withFaker;


class OutpatientsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function a_user_return_its_full_name() {


    $outpatients = factory(outpatients::class)->create();
    $full_name = $outpatients->last_name. ' ' .$outpatients->diagnosis. '' .$outpatients->lab_number;
    $this->assertTrue($full_name == $outpatients->full_name());



    }


    public function a_user_create_a_outpatients()
    {

    	
    }
}
  

