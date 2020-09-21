<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DoctorsController@index');

//CREATE FORM
Route::get('/doctors/create', 'DoctorsController@create');

Route::get('/doctors/{id}', 'DoctorsController@show');


//EDIT DISPLAY THE UPDATE FORM
Route::get('/doctors/{doctor}/edit', 'DoctorsController@edit');


//STORE A RECORD
Route::post('/doctors', 'DoctorsController@store');


// UPDATE DOCTORS
Route::put('/doctors/{doctor}', 'DoctorsController@update');

// DELETE FORM
Route::delete('/doctors/{doctor}', 'DoctorsController@destroy');


