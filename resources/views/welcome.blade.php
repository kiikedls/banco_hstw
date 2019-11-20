<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HSTW</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Extra CSS -->
	@yield('CSS')
</head>

<body>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark blue-gradient py-3">
		<div class="container">
			<!-- Brand -->
			<a class="navbar-brand" href="/">
				<img src="img/tmp_logo.png" height="30" alt="HSTW">
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
						<a class="btn btn-primary nav-link px-3" href="#">Iniciar sesión</a>
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

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Extra JS -->
	@yield('JS')
</body>

</html>
