<?php 
/*main layout page
* app()->getLocale will get parameter 'local' from config/app.php 
* csrf_token() let js get csrf token easily
* @yield('title','newapp') if child template does not provide title, 'newapp' will be used as title
* asset('css/app.css') will create a url by using current request's protocal (Http or Https),in this situation, it will create http://newapp.app/css/app.css
* route_class is defined by us, we will implement it in helpers.php, will build specific class name for page
* 
* @include('layouts._header') load _header template
* @yield('content') for child template inject content
* @include('layouts._footer') load _footer template
*
*/
?>

<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">


	<!--CSRF Token-->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title','newapp')</title>

	<!--style-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
	<div id="app" class="{{route_class()}}-page">
		
		@include('layouts._header')
		<div class="container">
			
			@yield('content')

		</div>
		@include('layouts._footer')

	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>