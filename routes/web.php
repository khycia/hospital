<?php

use Illuminate\Support\Facades\Route;



//fromEsmallaDev
//displaying rooms
Route::get('/showrooms' , 'PagesController@showrooms');
Route::get('/showrooms/{room}' , 'PagesController@roomInfo');

//displaying healthcares
Route::get('/showhealthcares' , 'PagesController@showhealthcares');
Route::get('/showhealthcares/{healthcare}' , 'PagesController@healthcareInfo');


//display the create form
Route::get('/rooms/create' , 'RoomsController@create'); 
Route::get('/healthcares/create' , 'HealthcaresController@create'); 

//display the update form
Route::get('/rooms/{room}/edit' , 'RoomsController@edit');
Route::get('/healthcares/{healthcare}/edit' , 'HealthcaresController@edit');  

//storing records
Route::post('/rooms' , 'RoomsController@store');
Route::post('/healthcares' , 'HealthcaresController@store');  

//updating records
Route::put('/rooms/{room}', 'RoomsController@update');
Route::put('/healthcares/{healthcare}', 'HealthcaresController@update');  

//deleting records
Route::delete('/rooms/{room}', 'RoomsController@destroy');
Route::delete('/healthcares/{healthcare}', 'HealthcaresController@destroy');    



//fromAdrianDev
Route::get('/', 'HomeController@index');
// Display patients table	
Route::get('/patients', 'PatientsController@index');
// Create a patient file
Route::get('/patients/create', 'PatientsController@create');
// Display a patient from patients table
Route::get('/patients/{patient_id}', 'PatientsController@show');
// Edit a patient file
Route::get('/patients/{patient_id}/edit', 'PatientsController@edit');

// Store a created patient file
Route::post('/patients/create', 'PatientsController@store');

// Update a patient file
Route::put('/patients/{patient_id}', 'PatientsController@update');

// Delete a patient file
Route::delete('/patients/{patient_id}', 'PatientsController@destroy');

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');

Route::middleware(['auth'])->group(function()
{
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'AuthController@logout');	
});

Route::get('/register', 'AuthController@register');

Route::post('/register', 'AuthController@store');




//fromAldwinDev
Route::get('/', 'OutPatientsController@return');


Route::get('/outpatients/create', 'OutPatientsController@create');

//Route::get('/register', 'OutPatientsController@register');

//Route::post('/register', 'OutPatientsController@registore');
Route::get('/outpatients/{outpatients}', 'OutPatientsController@show');


Route::get('/outpatients/{outpatients}/edit', 'OutPatientsController@edit');

Route::post('/outpatients', 'OutPatientsController@store');

Route::put('/outpatients/{outpatients}', 'OutPatientsController@update');


Route::delete('/outpatients/{outpatients}', 'OutPatientsController@destroy');

//Route::get('/templates','OutPatientsController@temp');
//Route::get('/templates/another-page','OutPatientsController@anotherPage');
//Route::get('/outpatients/{outpatients}',' OutPatientsController@index');
//Route::get('/outpatients/create',' OutPatientsController@index');


//fromGreggyDev
Route::get('/bills', 'BillsController@index');

Route::get('/bills/create', 'BillsController@create');

Route::get('/bills/{bill}', 'BillsController@show');

Route::get('/bills/{bill}/edit', 'BillsController@edit');

Route::post('/bills', 'BillsController@store');

Route::put('/bills/{bill}', 'BillsController@update');

Route::delete('/bills/{bill}/delete', 'BillsController@delete');

