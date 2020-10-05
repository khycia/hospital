<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoVariablesController extends Controller
{
	public function TwoVariables(){
	$message1 = "First message";
	$message2 = "Second message";

	return view('two-variables',['message1' => $message1,'message2' => $message2]);
    //
   }

	
}


