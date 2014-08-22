@extends('master')

@section('title_meta')
Your Planting Dates
@stop

@section('description')
<meta name="description" content="This page provides vegetable gardeners with the planting dates for their specific plants.">
@stop

@section('start')

<article class="main">
	<div class="row">
		<h1 class="text_center">Vegetable Garden<br />Planting Dates Calculator</h1><br />
		<p>The last frost date you selected is <strong>{{ $date }}</strong>.</p>
		<p>The planting dates for your plant list are:</p>
		
		<table class="table table-hover">
			<tr>
				<th>Plant</th><th>SeedLing Start</th><th>Transplant Outside</th><th>Direct Sow</th>
			</tr>
			@foreach ($plant_table as $plant)
				@foreach ($plant as $row)
					@if ($row->plant_name)
						<tr><td>{{ $row->plant_name }}</td><td>{{ $row->indoor_offset_days }}</td></tr>
					@endif
				@endforeach
			@endforeach
		</table><br />
		
		<p>Change Your <a class="link" href="planting-dates.suburbanhobbyfarmer.com">Plant Selection</a></p>
	</div><!--.row -->
</article>

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