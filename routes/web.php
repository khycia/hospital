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

Route::get('/' , 'PagesController@index');

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