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

	  public function show(outpatients $outpatients)
	  {
	  
	     //dd($outpatient);
         return view('outpatients.show', compact('outpatients'));
	  	 	  }
	  	 	  public function create() {
	  	 	  	return view('outpatients.create');
	  	 	  }
	  	 	  public function store() {

	  	 	  
	  	 	  	$outpatients = new outpatients;
	  	 	  	$outpatients->name = request()->name;
	  	 	  	$outpatients->diagnosis = request()->diagnosis;
	  	 	  	$outpatients->save();

	  	 	return redirect('/');
	  	 	 
	  	 	 
            

                 

	  	 	  }


	  	 	  public function edit(outpatients $outpatients) {

	  	 	  	return view('outpatients.edit', compact('outpatients'));
	  	 	  }

	  	 	  public function update(outpatients $outpatients) {

	  	 	  	$outpatients->diagnosis= request()-> diagnosis;
	  	 	  	 $outpatients->name= request()-> name;
                   $outpatients->save();
                    return redirect('/outpatients/' .$outpatients->id);
	  	 	  }

	  	 	  public function destroy (Outpatients $outpatients) {
	  	 	  	$outpatients->delete();
	  	 	  	return redirect('/');
	  	 	  }
    }
