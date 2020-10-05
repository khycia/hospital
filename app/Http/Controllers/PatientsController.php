<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;

class PatientsController extends Controller
{
    public function index() 
    {
    	$patients = Patient::all();
    	return view('patients.index', compact('patients'));
    }

    public function show($patient_id) 
    {

    	$patient = Patient::find($patient_id);
    	return view('patients.show', compact('patient'));
    }

    public function create()
    {
    	return view('patients.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'patient_type' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'contact' => 'required|unique:patients',
            'diagnosis' => 'required',
            'healthcare_type' => 'required',
            'doctor_id' => 'required',
            'nurse_id' => 'required'
        ]);
            
    	$patient = new Patient;
    	$patient->name = request()->name;
    	$patient->patient_type = request()->patient_type;
    	$patient->gender = request()->gender;
    	$patient->date_of_birth = request()->date_of_birth;
    	$patient->contact = request()->contact;
    	$patient->diagnosis = request()->diagnosis;
    	$patient->healthcare_type = request()->healthcare_type;
    	$patient->doctor_id = request()->doctor;
    	$patient->nurse_id = request()->nurse;
    	$patient->save();

    	return redirect('/patients');
    }

    public function edit($patient_id)
    {
    	$patient = Patient::find($patient_id);
    	return view('patients.edit', compact('patient'));
    }

    public function update($patient_id)
    {
        request()->validate([
            'name' => 'required',
            'patient_type' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'contact' => 'required|unique:patients',
            'diagnosis' => 'required',
            'healthcare_type' => 'required',
            'doctor_id' => 'required',
            'nurse_id' => 'required'
        ]);

    	$patient = Patient::find($patient_id);
    	$patient->name = request()->name;
    	$patient->patient_type = request()->patient_type;
    	$patient->gender = request()->gender;
    	$patient->date_of_birth = request()->date_of_birth;
    	$patient->contact = request()->contact;
    	$patient->diagnosis = request()->diagnosis;
    	$patient->healthcare_type = request()->healthcare_type;
    	$patient->doctor_id = request()->doctor;
    	$patient->nurse_id = request()->nurse;
    	$patient->save();

    	return redirect('/patients');
    }

    public function destroy($patient_id)
    {
    	$patient = Patient::find($patient_id);
    	$patient->delete();

    	return redirect('/patients');
    }

}
