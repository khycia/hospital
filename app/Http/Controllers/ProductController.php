<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
    	
    	$products = DB::table('products')->get();

		$products = DB::table('products')->where('price','>','100')->get(); 
		
		return view('products,index',compact('products'));   	
}
}
