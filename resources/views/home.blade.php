@extends('layouts.interface')

@section('CSS')
<style type="text/css">
	.view {
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: bottom;
		background-size: cover;
		background-image: url(/img/home.jpg);
	}

	.navbar {
		background-color: transparent;
	}

	.top-nav-collapse {
		background: linear-gradient(40deg, #45cafc, #303f9f);
	}

	@media only screen and (max-width: 768px) {
		.navbar {
			background-color: linear-gradient(40deg, #45cafc, #303f9f);
		}
	}

	html,
	body,
	header,
	#container,
	.view {
		height: 100%;
	}

	#navContent li a {
		text-shadow: 5px 5px 5px #222;
	}

	.navbar-brand img {
		-webkit-filter: drop-shadow(5px 5px 5px #222);
		filter: drop-shadow(5px 5px 5px #222);
	}

</style>
@endsection

@section('content')

<div class="view intro-2" style="">
	<div class="full-bg-img">
		<div class="mask rgba-black-light flex-center">
			<div class="container text-center white-text wow fadeInUp">
				<h2 class="display-1 font-weight-bold">Bienvenido al SWPC</h2>
				<br>
				<h5>Sistema web de préstamos y cobranza</h5>
				En este sitio podrás desempeñarte como trabajador de <b>HSTW Banco</b> de forma más ágil y rápida
				<br>
				<a class="btn btn-lg btn-outline-white mt-5" href="#">
					EMPEZAR
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
				ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
				voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
				consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
				enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
				mollit anim id est laborum.</p>

		</div>
	</div>
</div>

@endsection


@section('JS')
<script type="text/javascript">
	var nav = $('.navbar');

	nav.removeClass('blue-gradient');
	nav.addClass('fixed-top z-depth-0');

	$('#container').removeClass('container-fluid mt-4');

</script>
@endsection
