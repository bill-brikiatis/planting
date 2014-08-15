@extends('master')

@section('start')
<h2>Start Here</h2>
		
	<p>Each year vegetable gardeners must calculate when to start each type of plant in their garden. 
		This website takes the math out of the process by automatically calculating when to (1) start 
		seedlings indoors, (2) transplant seedlings outside and (3) direct sow seeds that won’t be 
		started from seedlings. The result is a list of your plants with planting dates to help you 
		plan your garden.</p>
		
<h2>Step #1 Enter Your Frost Free Dates</h2>
		
	<p>Enter the last frost date and first frost date for your location. The last frost date is the 
		last date in the spring after which there is little chance of killing frost. The first frost 
		date is the first day in the fall when there is a chance of killing frost.</p>
		
	<p>If you don’t know your frost free dates, you can easily find them at 
		<a href="http://www.plantmaps.com/">PlantMaps</a>.</p>
	
	{{ Form::open() }}
	{{ Form::label('last_frost', 'Enter Last Frost Date:'); }}
	{{ Form::input('date', 'date', null, ['class' => 'form-control', 'placeholder' => 'Date']) }}<br><br />
	{{ Form::label('first_frost', 'Enter First Frost Date:'); }}
	{{ Form::input('date', 'date', null, ['class' => 'form-control', 'placeholder' => 'Date']) }}<br><br />
	{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
	
<h2>Step #2 Select Your Plants</h2>

	<p>Select the plants you’ll be growing:</p>
	
	{{ Form::open() }}
	@foreach ($plant_list as $plant)
		{{ Form::checkbox($plant, $plant) }}
		{{ Form::label('plants', $plant); }}<br><br />
	@endforeach
	{{ Form::submit('Calculate', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}<br /><br />
	{{ Form::reset('Clear Form', ['class' => 'btn btn-danger']) }}
	
@stop