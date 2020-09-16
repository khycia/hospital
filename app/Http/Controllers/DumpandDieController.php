<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpAndDieController extends Controller
{
  	 public function DumpAndDie()
{		
	$message=request('products');

	return view('dump-and-die',
	['message'=>$message ]);
}
}