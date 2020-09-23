<?php



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
Route::get('/', function () {
    return view('welcome');
});

// Display nurses table
Route::get('/nurses', 'NursesController@index');
// Create a patient file
Route::get('/nurses/create', 'NursesController@create');
// Display a patient from patients table
Route::get('/nurses/{id}', 'NursesController@show');
// Edit a patient file
Route::get('/nurses/{id}/edit', 'NursesController@edit');

// Store a created patient file
Route::post('/nurses/create', 'NursesController@store');

// Update a patient file
Route::put('/nurses/{id}', 'NursesController@update');

// Delete a patient file
Route::delete('/nurses/{id}', 'NursesController@delete');