<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Nurses;
use Auth;



class NursesController extends Controller
{
   
    public function index()
    {
        $nurses = Nurses::all();
        return view('Nurses.index', compact('nurses'));
    }

    public function show($id) 
    {

        $nurse = Nurses::find($id);
        return view('Nurses.show', compact('nurse'));
    }

    public function create()
    {
        return view('Nurses.create');
    }

    public function store()
    {       



        request()->validate([

            'name' => 'required',
            'contact' => 'required|unique:nurse',
            'position' =>'required',
            'department' => 'required'
        ]);
        $nurse = new Nurses;
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
        request()->validate([

            'name' => 'required',
            'contact' => 'required|unique:doctor',
            'position' =>'required',
            'department' => 'required' 
        ]);
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

        return redirect('/nurses');
    }

}
