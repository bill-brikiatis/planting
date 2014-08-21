@extends('master')

@section('start')
	<article class="main">
		<div class="row">
			<h1 class="text_center">Vegetable Garden<br />Planting Dates Calculator</h1>
			<h2>Start Here</h2>
					
				<p>Each year vegetable gardeners must calculate when to start each type of plant in their garden. 
					This site helps you by takeing the math out of the process. It automatically calculating when to: 
				<ol>
					<li>Start seedlings indoors</li>
					<li>Transplant seedlings outside</li> 
					<li>Direct sow seeds that won’t be started from seedlings</li>
				</ol></p>
				
				<p>The result is a list of your plants with associated planting dates to help you 
					plan your garden.</p>
					
			<h2>Step #1 Enter Your Last Frost Date</h2>
					
				<p>Enter the last frost date for your location. The last frost date is the last date in 
					spring after which there is little chance of killing frost.</p>
					
				<p>If you don’t know your last frost date, you can find easily at 
					<a href="http://www.plantmaps.com/" target="_blank">PlantMaps</a> from the USDA.</p>
				
				{{ Form::open() }}
				{{ Form::label('last_frost', 'Enter Last Frost Date:', array('class' => 'less_space')); }}
				{{ Form::text('date', 'MM/DD/YYYY', ['class' => 'form-control', 'id' => 'myDatepicker' 
				]) }}<br/>
				
			<h2>Step #2 Select Your Plants</h2>
			
				<p>Select the plants you’ll be growing:</p>
				
				<?php 
				
				$count = count($plant_list);
				$limit = $count / 2;
				$limit = round($limit, PHP_ROUND_HALF_UP);
				
				?>
				
				<div class="col-md-6">
					@for ($i = 0; $i <= $limit; $i++)
						{{ Form::checkbox($plant_list[$i], $plant_list[$i]) }}
						{{ Form::label('plants', $plant_list[$i]) }}<br>
					@endfor
				</div>
				<div class="col-md-6">
					@for ($i=($limit+1); $i <= $count; $i++)
						{{ Form::checkbox($plant_list[$i], $plant_list[$i]) }}
						{{ Form::label('plants', $plant_list[$i]) }}<br>
					@endfor
				</div>
				<div class="col-md-12">
					<br />{{ Form::submit('Calculate', ['class' => 'btn btn-success btn-margin']) }}
					{{ Form::reset('Clear Form', ['class' => 'btn btn-danger']) }}
					{{ Form::close() }}
				</div>
		</div><!-- .row -->
	</article>
	<!--<div class="clear_bb"></div>-->
	
	<aside class="sidebar">
		<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>
		<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>
		<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>
	</aside>
@stop