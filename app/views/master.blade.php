<!DOCTYPE html>
<html>
<head>

    <title>@yield('title_meta', 'Planting Dates Calculator')</title>
    @yield('description', '<meta name="description" content="Planting dates calculator to help backyard vegetable gardeners plan when to plant.">')

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	{{ HTML::style('css/custom.css') }}

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="js/respond.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" />
	<link rel="shortcut icon" href="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2010/12/sf.jpg"/>
	{{ HTML::script('js/extend.js') }}

</head>
<body onload="extendSidebar('extend_main', 'extend_sidebar')">
	<div class="container">
		<header class="row">
			@if(Session::get('flash_message'))
			<div class='alert-danger'>{{ Session::get('flash_message') }}</div>
			@endif
			
			<nav class="row">
				<div class="logo_left">
				<a href="http://www.suburbanhobbyfarmer.com/"><img src=' {{ URL::to("images/shf_logo.jpg") }} ' alt="Suburban Hobby Farmer"></a>
				</div>
		    	<ul class="nav nav-tabs nav_right">
		        	<li><a href="#">Partner with SHF</a></li>
		        	<li class="active"><a href="#">Planting Dates</a></li>
		        	<li><a href="http://astore.amazon.com/subuhobbfarm-20">Bookstore</a></li>
		        	<li><a href="http://www.suburbanhobbyfarmer.com/about/">About</a></li>  
		        	<li><a href="http://www.suburbanhobbyfarmer.com/">Home</a></li>
		        </ul>  
		    </nav>
		</header>
		
		@yield('start')

		
		
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<script>
			$( "#myDatepicker" ).datepicker();
			</script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			
	</div><!--.container-->
	<footer>
	<span><a href="www.suburbanhobbyfarmer.com/">Suburban Hobby Farmer</a> Copyright &copy; All Rights Reserved.</span>
	</footer>
</body>

</html>