<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body>
<div class="container">
	@include('includes.header')
	<main role="main">
		@yield('content')
		@yield('content')
	</main>
</div>
<footer class="container-fluid bg-dark text-white text-center">
	<div class="container">
	
	</div>
</footer>
@include('includes.jsfile')
</body>
</html>