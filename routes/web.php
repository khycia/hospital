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


