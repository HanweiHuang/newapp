<?php
/*header layout page*/

?>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<a class="navbar-brand" href="{{ url('/') }}">
				newapp
			</a>

		</div>


		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<ul class="nav navbar-nav">
				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Login</a></li>
				<li><a href="#">Register</a></li>
			</ul>
		</div>

	</div><!--container-->	
</nav>