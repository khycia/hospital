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

Route::get('/bills', 'BillsController@index');

Route::get('/bills/create', 'BillsController@create');

Route::get('/bills/{bill}', 'BillsController@show');

Route::get('/bills/{bill}/edit', 'BillsController@edit');

Route::post('/bills', 'BillsController@store');

Route::put('/bills/{bill}', 'BillsController@update');

Route::delete('/bills/{bill}/delete', 'BillsController@delete');