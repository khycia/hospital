<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'OutPatientsController@return');


Route::get('/outpatients/create', 'OutPatientsController@create');
Route::get('/outpatients/{outpatients}', 'OutPatientsController@show');


Route::get('/outpatients/{outpatients}/edit', 'OutPatientsController@edit');

Route::post('/outpatients', 'OutPatientsController@store');

Route::put('/outpatients/{outpatients}', 'OutPatientsController@update');


Route::delete('/outpatients/{outpatients}', 'OutPatientsController@destroy');

//Route::get('/templates','OutPatientsController@temp');
//Route::get('/templates/another-page','OutPatientsController@anotherPage');
//Route::get('/outpatients/{outpatients}',' OutPatientsController@index');
//Route::get('/outpatients/create',' OutPatientsController@index');