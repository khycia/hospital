<?php

namespace App\Http\Controllers;

use Auth;
use App\User;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function register(){
    	return view ('register');
    }


    public function store(){
    	$validated_fields = Request()->validate([
    		'name'=>'required',
    		'email'=> 'required|unique:users',
    		'password' => 'required'
    	]);

    	$validated_fields['password'] = bcrypt($validated_fields['password']);
    	$user = User::create($validated_fields);

    	return redirect ('login');
    }

}

