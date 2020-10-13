<?php

namespace Tests\Unit;

use App\inpatient;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class InpatientsTest extends TestCase
{
    use RefreshDatabase;

    public function test_inpatients_return_its_name_and_diagnosis()
    {
       $inpatient=factory(inpatient::class)->create();
       $name_diagnosis=$inpatient->name. ' has diagnosis of '.$inpatient-> diagnosis;
       $this->assertTrue($name_diagnosis == $inpatient->name_diagnosis());
    }
}
