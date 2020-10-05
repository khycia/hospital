<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function masakitarray()
    {
		$foods=['Chocolate','Chicken','Samgyup'];
		return view('foods',['$foods' => $foods ]);
    }
}
