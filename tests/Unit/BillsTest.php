<?php

namespace Tests\Unit;

use App\Bills;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\withFaker;

class BillsTest extends TestCase
{
    use RefreshDatabase;

    public function return_patiend_id_and_discount()
    {
       $bill=factory(bill::class)->create();
       $patiend_id_discount=$bill->patient_id. ' discount '.$bill-> discount;
       $this->assertTrue($patient_id_discount == $bill->patiend_id_discount());
    }
}