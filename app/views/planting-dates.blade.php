@extends('master')

@section('title_meta')
Your Planting Dates
@stop

@section('description')
<meta name="description" content="This page provides vegetable gardeners with the planting dates for their specific plants.">
@stop

@section('start')

<article class="main" id="extend_main">
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
						@if ($row->indoor_offset_days === 0)
							<?php $row->indoor_offset_days = "Not Applicable"; ?>
							<?php $row->transplant_offset_days = "Not Applicable"; ?>
						@else
							<?php $row->indoor_offset_days = date('m/d/Y', strtotime(date("Y-m-d", strtotime($date)) . $row->indoor_offset_days . "days")); ?>
							<?php $row->transplant_offset_days = date('m/d/Y', strtotime(date("Y-m-d", strtotime($date)) . $row->transplant_offset_days . "days")); ?>
						@endif
						@if ($row->direct_sow)
							<?php $row->outdoor_offset_days = date('m/d/Y', strtotime(date("Y-m-d", strtotime($date)) . $row->outdoor_offset_days . "days")); ?>
						@else
							<?php $row->outdoor_offset_days = "Not Applicable"; ?>
						@endif
						<tr><td>{{ $row->plant_name }}</td><td>{{ $row->indoor_offset_days }}</td><td>{{ $row->transplant_offset_days }}</td>
							<td>{{ $row->outdoor_offset_days }}</td></tr>
					@endif
				@endforeach
			@endforeach
		</table><br />
		
		<p>You can change your plant selection or last frost date <a class="link" href="http://planting-dates.suburbanhobbyfarmer.com/">here</a>.</p>
		<p>Please keep in mind that these dates are a guide and may need to be significantly different depending on your exact varieties or environmental conditions.</p>
		<?php 
			$article = null;
			foreach ($plant_table as $plant) {
				foreach ($plant as $row) {
					if ($article) {
						break;
					}
					else {
						switch($row->plant_name) {
							case 'Tomatoes':
								$article_plant = ($row->plant_name);
								$article = "<p>Since you are planing to grow $article_plant, you may want to read the Suburban Hobby Farmer article <a href='http://www.suburbanhobbyfarmer.com/fermenting-tomato-seeds/'>Is Fermenting Tomato Seeds Necessary?</a>.</p>";
								break;
								
								case 'Zucchini':
								$article_plant = ($row->plant_name);
								$article = "<p>Since you are planing to grow $article_plant, you may want to read the Suburban Hobby Farmer article  <a href='http://www.suburbanhobbyfarmer.com/controlling-squash-borer-ii/'>Controlling Squash Borer II</a>.</p>";
								break;
								
								case 'Arugula':
								$article_plant = ($row->plant_name);
								$article = "<p>Since you are planing to grow $article_plant, you may want to read the Suburban Hobby Farmer article <a href='http://www.suburbanhobbyfarmer.com/easy-to-grow-crops/'>Easy to Grow Crops</a>.</p>";
								break;
								
								case 'Lettuce':
								$article_plant = ($row->plant_name);
								$article = "<p>Since you are planing to grow $article_plant, you may want to read the Suburban Hobby Farmer article <a href='http://www.suburbanhobbyfarmer.com/lettuce-fall-vegetable-garden/'>Lettuce in the Fall Vegetable Garden</a>.</p>";
								break;
								
								case 'Cucumbers':
								$article_plant = ($row->plant_name);
								$article = "<p>Since you are planing to grow $article_plant, you may want to read the Suburban Hobby Farmer article <a href='http://www.suburbanhobbyfarmer.com/transplanting-seedlings/'>Transplanting Seedlings Outdoors</a>.</p>";
								break;
						}
					}
				}
			}
		?>
		<p><?php echo "$article"; ?></p>
		<p>If you have comments on this Planting Dates Calculator, please send me an email using the form <a class="link" href="http://www.suburbanhobbyfarmer.com/partner-with-shf/">here</a>.</p>
	</div><!--.row -->
</article>
	<aside class="sidebar" id="extend_sidebar">
		
		
		<?php foreach ($plant_table as $plant): ?>
			<?php foreach ($plant as $row): ?>
				<?php if ($row->plant_name): ?>
						<?php $arr[] = $row->ads; ?>
					<?php endif; ?>
			<?php endforeach; ?>
		<?php endforeach; ?>
		
		<?php shuffle($arr); ?>
		<?php $i = 0; ?>
		<?php foreach ($arr as $value): ?>
			<?php if ($i++ >= 4): break; ?>
			<?php endif; ?>
			<?php echo $value; ?>
		<?php endforeach; ?>

	</aside>
@stop