<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function RedirectRoute(){
    return redirect()->route('SecondRoute');
}
}