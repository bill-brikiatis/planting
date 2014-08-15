<!DOCTYPE html>
<html>
<head>

    <title>@yield('title_meta', 'Planting Dates Calculator')</title>
    @yield('description', '<meta name="description" content="Planting dates calculator to help backyard vegetable gardeners plan when to plant.">')

    <meta charset='utf-8'>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


</head>
<body>
	<div class="container">
		@if(Session::get('flash_message'))
		<div class='alert-success'>{{ Session::get('flash_message') }}</div>
		@endif
		
		<img src=' {{ URL::asset('images/shf_logo.jpg') }} ' alt='Suburban Hobby Farmer'>
		
		<h1>Vegetable Garden<br />Planting Dates Calculator</h1>
		@yield('start')
		
			<!-- Latest compiled and minified JavaScript -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</div><!--.container-->
</body>

</html>