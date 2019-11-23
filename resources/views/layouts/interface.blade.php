@extends('layouts.resources')

@section('main-CSS')
@yield('CSS')
@endsection

@section('main-content')
	<!-- Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark blue-gradient scrolling-navbar">
		<div class="container">
			<!-- Brand -->
			<a class="navbar-brand" href="/">
				<img src="/img/logos/logo_white.png" height="48" alt="HSTW">
			</a>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#RightNav" aria-controls="RightNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="RightNav">
				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Aquí</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Habrá</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contenido</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<!--<a class="btn btn-primary nav-link px-3" href="#">Iniciar sesión</a>-->
					</li>
				</ul>
			</div>
			<!-- Collapsible content -->

		</div>
	</nav>
	<!--/.Navbar-->

	<div class="container-fluid mt-2">
		@yield('content')
	</div>
@endsection

@section('main-JS')
@yield('JS')
@endsection
