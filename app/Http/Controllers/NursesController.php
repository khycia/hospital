<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nurses;



class NursesController extends Controller
{
   
    public function index()
    {
        $nurses = Nurse::all();
        return view('Nurses.index', compact('nurses'));
    }

    public function show($id) 
    {

        $nurse = Nurse::find($id);
        return view('Nurses.show', compact('nurse'));
    }

    public function create()
    {
        return view('Nurses.create');
    }

    public function store()
    {
        $nurse = new Nurse;
        $nurse->name = request()->name;
        $nurse->contact = request()->contact;
        $nurse->department= request()->department;
        $nurse->save();

        return redirect('/nurses');
    }

    public function edit($id)
    {
        $nurse = Nurse::find($id);
        return view('Nurses.edit', compact('nurse'));
    }

    public function update($id)
    {
   
        $nurse->name = request()->name;
        $nurse->contact = request()->contact;
        $nurse->department= request()->department;
        $nurse->save();
        

        return redirect('/nurses');
    }

    public function delete($id)
    {
        $nurse = Nurse::find($id);
        $nurse->delete();

        return redirect('/nurse');
    }

}
