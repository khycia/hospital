<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function TestView(){
    	return view('testview')
    }
}