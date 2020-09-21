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
}
