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
//displaying rooms
Route::get('/labs' , 'LabController@index');


// Create a nurse file
Route::get('/nurses/create', 'NursesController@create');
//create a lab form
Route::get('/labs/create' , 'LabController@create'); 
 


// Display a nurse file from nurses table
Route::get('/nurses/{id}', 'NursesController@show');
//displaying lab
Route::get('/labs' , 'LabController@show');

// Edit a nurse file
Route::get('/nurses/{id}/edit', 'NursesController@edit');
//edit lab records
Route::get('/labs/{lab}/edit' , 'LabController@edit');


// Store a created nurse file
Route::post('/nurses/create', 'NursesController@store');
//storing records
Route::post('/labs' , 'LabController@store');




// Update a nurse file
Route::put('/nurses/{id}', 'NursesController@update');


// Delete a nurse file
Route::delete('/nurses/{id}', 'NursesController@delete');
//deleting records
Route::delete('/labs/{lab}', 'LabController@destroy');

//login page
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');

//dashboard
Route::middleware(['auth'])->group(function()
{
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'AuthController@logout');	
});
//register page
Route::get('/register', 'AuthController@register');

Route::post('/register', 'AuthController@store');