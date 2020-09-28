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

Route::get('/','Controller@index');

Route::get('/inpatients', 'inpatientsController@index');

Route::get('/inpatients/create', 'inpatientsController@create');

Route::get('/inpatients/{inpatient}', 'inpatientsController@show');

Route::post('/inpatients', 'inpatientsController@store');

Route::get('/inpatients/{inpatient}/edit','inpatientsController@edit');

Route::put('/inpatients/{inpatient}','inpatientsController@update');

Route::delete('/inpatients/{inpatient}/delete','inpatientsController@delete');

Route::get('/register','AuthController@register');

Route::post('/register','AuthController@store');