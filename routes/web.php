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

//1ST ROUTE
Route::view('/', 'testview');
//2ND ROUTE	
Route::get('/testview','TestViewController@TestView');
//3RD ROUTE
Route::get('/products', 'DumpandDieController@DumpAndDie');
//4TH ROUTE 
Route::get('/redirect', 'RedirectController@RedirectRoute')->name('SecondRoute'); 
//5TH ROUTE
Route::get('/variables', 'TwoVariablesController@TwoVariables'); 
//6TH ROUTE
Route::get('/foods','ArrayController@masakitarray'); 