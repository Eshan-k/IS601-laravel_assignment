<!-- header file contains navbar -->

@extends('includes.head')
<header>
	<nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">IS 601 Laravel Assignment</a>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>