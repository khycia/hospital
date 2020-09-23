<?php

namespace App\Http\Controllers;

use App\Healthcare;
use Illuminate\Http\Request;

class HealthcaresController extends Controller
{
    public function create() {
    	return view('healthcares.create');
    }

    public function store() {
    	$healthcare = new Healthcare;
    	$healthcare->title = request()->title;
    	$healthcare->discount = request()->discount;
    	$healthcare->save();

    	return redirect('/showhealthcares');
    }

    public function edit(Healthcare $healthcare) {
    	return view('healthcares.edit' , compact('healthcare'));
    }
    
    public function update(Healthcare $healthcare) {
    	$healthcare->title = request()->title;
    	$healthcare->discount = request()->discount;
    	$healthcare->save();

    	return redirect('/showhealthcares/'.$healthcare->id);
    }

    public function destroy(Healthcare $healthcare) {
    	$healthcare->delete();
    	return redirect('/showhealthcares');
    }
}
