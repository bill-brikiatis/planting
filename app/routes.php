<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Home Page Route */
Route::get('/', function()
{
	return View::make('home');
});


/* Access Plant List */
Route::get('/', 'PlantsController@postPlantList');


/* Planting Dates Route */
Route::get('/planting-dates', function()
{
	return View::make('planting-dates');
});
