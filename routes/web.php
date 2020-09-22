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
Route::get('/outpatients/{outpatients}', 'OutPatientsController@show');
Route::get('/outpatients/create', 'OutPatientsController@create');
Route::get('/outpatients/{outpatients}/edit', 'OutPatientsController@edit');
Route::post('/outpatients', 'OutPatientsController@store');
Route::put('/outpatients/{outpatients}', 'OutPatientsController@store');
Route::delete('/outpatients/{outpatients}', 'OutPatientsController@destroy');

//Route::get('/templates','OutPatientsController@temp');
//Route::get('/templates/another-page','OutPatientsController@anotherPage');
//Route::get('/outpatients/{outpatients}',' OutPatientsController@index');
//Route::get('/outpatients/create',' OutPatientsController@index');