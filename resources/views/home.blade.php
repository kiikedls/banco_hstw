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

	.mask {
		background: linear-gradient(40deg, rgba(69,202,252,0), rgba(48,63,159,1)) !important;
	}

	.navbar {
		background-color: transparent;
	}

	.top-nav-collapse {
		background: linear-gradient(40deg, #45cafc, #303f9f) !important;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
	}

	@media only screen and (max-width: 768px) {
		.navbar {
			background: linear-gradient(40deg, #45cafc, #303f9f) !important;
			-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
		}
	}

	html,
	body,
	header,
	#container,
	.view {
		height: 100%;
	}
</style>
@endsection

@section('content')

<div class="view intro-2" style="">
	<div class="full-bg-img">
		<div class="mask flex-center">
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
