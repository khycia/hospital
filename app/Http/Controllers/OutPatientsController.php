<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outpatients;
class OutPatientsController extends Controller
{
	  public function return() {
	  	$outpatients = outpatients::all();
	  	return view('outpatients.index', compact('outpatients'));
	  }

	  public function show($patient_id)
	  {
	  	$outpatients = outpatients::find($patient_id);
	     //dd($outpatient);
         return view('outpatients.show', compact('outpatients'));
	  	 	  }
	  	 	  public function create() {
	  	 	  	return view('outpatients.create');
	  	 	  }
	  	 	  public function store() {
	  	 	  	$outpatients = new Outpatient;
	  	 	  	$outpatients->diagnosis= request()-> diagnosis;
	  	 	  	 $outpatients->name= request()-> name;
	  	 	    $outpatients->save();



	  	 	    return redirect('/');
                 

	  	 	  }


	  	 	  public function edit(Outpatients $outpatients) {

	  	 	  	return view('outpatients.edit', compact('outpatients'));
	  	 	  }

	  	 	  public function update(Outpatients $outpatients) {

	  	 	  	$outpatients->diagnosis= request()-> diagnosis;
	  	 	  	 $outpatients->name= request()-> name;
                   $outpatients->save();
                    return redirect('/outpatients/' .$outpatients->patient_id);
	  	 	  }

	  	 	  public function destroy (Outpatients $outpatients) {
	  	 	  	$outpatients->delete();
	  	 	  	return redirect('/');
	  	 	  }
    }
