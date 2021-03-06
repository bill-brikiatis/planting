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

# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
