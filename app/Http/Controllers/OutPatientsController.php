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
	 
         return view('outpatients.show', compact('outpatients'));
	  	 	  }
    }
