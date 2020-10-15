<?php

namespace Tests\Unit;
use App\Nurses;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;	

class Nursestest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function a_nurse_returns_its_credentials()
    {
    	$nurse = factory(Nurse::class)->create();
    	$credential = $nurse->first_name.' '.$nurse->last_name.' '.$nurse->contact_number.' '.$nurse->email;
    	$this->assertTrue($credential == $nurse->credential()); 
    }

}
