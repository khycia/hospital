<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Outpatient;

class OutpatientsController extends Controller
{
	  public function return() {
	  	$outpatients = Outpatient::all();
	  	return view('outpatients.index', compact('outpatients'));
	  }

	  public function show(Outpatient $outpatients)
	  {
	  
	     //dd($outpatient);
         return view('outpatients.show', compact('outpatients'));
	  	 	  }
	  	 	  public function create() {
	  	 	  	return view('outpatients.create');
	  	 	  }

	  	 	  public function register (){
                  


               return view('register');
	  	 	  }

	  	 	  public function registore () {
              $validated_fields = request()-> validate([
               	'name' => 'required',
               	'diagnosis' => 'required',
               	'lab_number' => 'required|unique:outpatients'



               ]);
              $validated_fields['lab_number'] = bcrypt($validated_fields['lab_number']);
            

              $outpatients = Outpatient::create($validated_fields );
              return redirect('/');

          

	  	 	  }
	  	 	  public function store() {

	  	 	  
	  	 	  	$outpatients = new Outpatient;
	  	 	  	$outpatients->name = request()->name;
	  	 	  	$outpatients->diagnosis = request()->diagnosis;
	  	 	  	$outpatients->lab_number = request()->lab_number;
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
