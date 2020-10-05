<?php

namespace App\Http\Controllers;

use App\inpatient;
use Illuminate\Http\Request;

class inpatientsController extends Controller
{
    public function index()
    {
    	$inpatients= inpatient::all();
    	return view('inpatients.index', compact('inpatients'));
    }

    public function show(inpatient $inpatient)
    {	
    	return view('inpatients.show', compact('inpatient')); 
    }

    public function create(){
    	return view('inpatients.create');
    }

    public function store(){
    	$inpatient = new inpatient;

    	$inpatient-> create([
    		'name' => request()->name,
    		'diagnosis' => request()->diagnosis,
    		'room_number' => request()->room_number
    	]);
    	return redirect('/inpatients');
    }

    public function edit(inpatient $inpatient)
    {
    	return view ('inpatients.edit', compact('inpatient'));
    }

    public function update(inpatient $inpatient)
    {
    	$inpatient->update([
    		'name' => request()->name,
    		'diagnosis' => request()->diagnosis,
    		'room_number' => request()->room_number
    	]);
    	return redirect('/inpatients');
    }

    public function delete(inpatient $inpatient)
    {
    	$inpatient->delete();
    	return redirect ('/inpatients');
    }
}
