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
/*Route::post('/planting-dates',
		array('before' => 'csrf', function()
			{
				$rules = array(
		        'date' => 'date'
		    );
		
		    $validation = Validator::make(Input::all(), $rules);
		
		    if ($validation->fails())
		    {
		        // Validation has failed.
		        return Redirect::to('/')
		        	->with_input()
		        	->with('flash_message', 'Please enter a last frost date using the proper format.');
		    }
    
    	return View::make('planting-dates');
}));*/


/* Access Plant List */
Route::post('/planting-dates', 'PlantsController@postFormData');
