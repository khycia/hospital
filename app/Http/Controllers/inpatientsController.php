<?php

namespace App\Http\Controllers;

use App\Inpatient;
use Illuminate\Http\Request;

class InpatientsController extends Controller
{
    public function index()
    {
    	$inpatients= Inpatient::all();
    	return view('inpatients.index', compact('inpatients'));
    }

    public function show(Inpatient $inpatient)
    {	
    	return view('inpatients.show', compact('inpatient')); 
    }

    public function create(){
    	return view('inpatients.create');
    }

    public function store(){
    	$inpatient = new Inpatient;

    	$inpatient-> create([
    		'name' => request()->name,
    		'diagnosis' => request()->diagnosis,
    		'room_number' => request()->room_number
    	]);
    	return redirect('/inpatients');
    }

    public function edit(Inpatient $inpatient)
    {
    	return view ('inpatients.edit', compact('inpatient'));
    }

    public function update(Inpatient $inpatient)
    {
    	$inpatient->update([
    		'name' => request()->name,
    		'diagnosis' => request()->diagnosis,
    		'room_number' => request()->room_number
    	]);
    	return redirect('/inpatients');
    }

    public function delete(Inpatient $inpatient)
    {
    	$inpatient->delete();
    	return redirect ('/inpatients');
    }
}
