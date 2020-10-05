<?php

namespace App\Http\Controllers;
use App\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    

    public function create() {
    	return view('lab.create');
    }

    public function store() {

         request()->validate([

            'lab' => 'required',
            'date' => 'required|unique:nurse',
            'amount' =>'required',
           
        ]);
    	$lab = new Lab;
    	$lab->date = request()->date;
    	$lab->amount = request()->amount;
    	$lab>save();

    	return redirect('/lab');
    }

     public function show() 
    {

        $lab = Lab::find($id);
        return view('lab.show', compact('lab'));
    }

    public function edit(Lab $lab) {
    	return view('lab.edit' , compact('lab'));
    }

    public function update(Lab $lab) {


        request()->validate([

            'lab' => 'required',
            'date' => 'required|unique:nurse',
            'amount' =>'required',
           
        ]);
    	$lab->date = request()->date;
    	$lab->amount = request()->amount;
    	$lab>save();

    	return redirect('/labs/'.$lab->id);
    }

    public function delete(Lab $lab) {
    	$lab->delete();
    	return redirect('/labs');
    }
}

