<?php

namespace App\Http\Controllers;

use App\Bill;


class BillsController extends Controller
{
     public function index()
    {
        $bills= Bill::all();
        return view('bills.index', compact('bills'));
    }
    public function show(Bill $bill)
    {
        return view('bills.show', compact('bill'));
    }

    public function create(){
        return view('bills.create');
    }

    public function store(){

        request()->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'nurse_id' => 'required',
            'healthcare_type' => 'required',
            'discount' => 'required',
            'room_charge' => 'required',
            'no_of_days' => 'required',
            'lab_charge' => 'required'
        ]);



        $bill = new Bill;
 
        $bill->patient_id = request()->patient_id;
        $bill->doctor_id = request()->doctor_id;
        $bill->nurse_id = request()->nurse_id;
        $bill->healthcare_type = request()->healthcare_type;
        $bill->discount = request()->discount;
        $bill->room_charge = request()->room_charge;
        $bill->no_of_days = request()->no_of_days;
        $bill->lab_charge = request()->lab_charge;
        $bill->save();
        
        return redirect('/bills');
    }

    public function edit(Bill $bill)
    {

        return view('bills.edit', compact('bill'));
    }

     public function update(Bill $bill)
    {

        request()->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'nurse_id' => 'required',
            'healthcare_type' => 'required',
            'discount' => 'required',
            'room_charge' => 'required',
            'no_of_days' => 'required',
            'lab_charge' => 'required'
        ]);
        
        $bill->patient_id = request()->patient_id;
        $bill->doctor_id = request()->doctor_id;
        $bill->nurse_id = request()->nurse_id;
        $bill->healthcare_type = request()->healthcare_type;
        $bill->discount = request()->discount;
        $bill->room_charge = request()->room_charge;
        $bill->no_of_days = request()->no_of_days;
        $bill->lab_charge = request()->lab_charge;
        $bill->save();


        return redirect('/bills');

    }

    public function delete(Bill $bill)
    {

        $bill->delete();
        return redirect('/bills');

    }
}
