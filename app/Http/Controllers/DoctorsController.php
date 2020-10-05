<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
    	$doctors = Doctor::all();
    	return view('doctors.index',compact('doctors'));
    }

    public function show($id)
    {

    	$doctor = Doctor::findOrFail($id);

    	return view('doctors.show', compact('doctor'));
    }

    public function create()
    {
    	return view('doctors.create');

    }

    public function store()

    {
    	request()->validate([

    		'name' => 'required',
    		'contact' => 'required|unique:doctor',
    		'position' =>'required',
    		'department' => 'required'


    	]);

    		
    	$doctor = new Doctor;
    	$doctor->name = request()->name;
    	$doctor->contact = request()->contact;
    	$doctor->position = request()->position;
    	$doctor->department = request()->department;
    	$doctor->save();


    	return redirect('/');
    }

    public function edit(Doctor $doctor)
    {

    	return view('doctors.edit', compact('doctor'));
    }

    public function update(Doctor $doctor)
    {

    	request()->validate([

    		'name' => 'required',
    		'contact' => 'required|unique:doctor',
    		'position' =>'required',
    		'department' => 'required'


    	]);
    	
    	$doctor->name = request()->name;
    	$doctor->contact = request()->contact;
    	$doctor->position = request()->position;
    	$doctor->department = request()->department;

    	$doctor->save();


    	return redirect('/');

    }

    public function destroy(Doctor $doctor)
    {

    	$doctor->delete();
    	return redirect('/');

    }
}

