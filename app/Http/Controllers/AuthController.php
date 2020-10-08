<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login()
    {
    	request()->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials)){
    		return redirect('/dashboard');
    	}
    	return back()->withErrors([
    		'credentials' => 'Invalid username or password'
    	]);
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }

    public function register()
    {
    	return view('register');
    }

    public function store()
    {
    	$validated_fields = request()->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users'
      ]);
    	return redirect('/login');
    }
}

