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
Route::get('/', 'OutPatientsController@return');
Route::get('/outpatients/{patient_id}', 'OutPatientsController@show');

Route::get('/templates','OutPatientsController@temp');
Route::get('/templates/another-page','OutPatientsController@anotherPage');
//Route::get('/outpatients/{outpatients}',' OutPatientsController@index');
//Route::get('/outpatients/create',' OutPatientsController@index');