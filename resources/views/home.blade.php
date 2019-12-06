@extends('layouts.interface')

@section('CSS')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('content')

<div class="view intro-2">
	<div class="full-bg-img">
		<div class="mask flex-center">
			<div class="container text-center white-text wow fadeInUp">
				<h2 class="display-1 font-weight-bold" id="welcomeText">Bienvenido al SWPC</h2>
				<br>
				<h5>Sistema web de préstamos y cobranza</h5>
				En este sitio podrás desempeñarte como trabajador de <b>HSTW Banco</b> de forma más ágil y rápida
				<br>
				<a class="btn btn-lg btn-outline-white mt-5 mx-auto" id="empezar" href="#">EMPEZAR</a>
			</div>
		</div>
	</div>
</div>

<div class="container my-5">
	<div class="row">
		<div class="col col-md-6">
			<h3 class="mb-4">¿Qué gustas desempeñar?</h3>
			<div class="list-group" id="home-menu">
				<a href="/clientes"
					class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Gestión de
					clientes</a>
				<a href="/calprestamo"
					class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Calcular
					préstamos</a>
				<a href="/burodecredito"
					class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Verificar buro
					de crédito</a>
				<a href="#!" class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Generar
					reportes de préstamos</a>
				<a href="#!" class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Asignar
					préstamos</a>
				<a href="/tarjetas"
					class="list-group-item list-group-item-action mb-4 py-2 border-0 z-depth-1 rounded">Asignar tarjetas
					de débito y
					crédito</a>
				<a href="#!" class="list-group-item list-group-item-action py-2 border-0 z-depth-1">Gestionar área de
					cobranza</a>
			</div>
		</div>
		<div class="col-md-6 d-none d-lg-block">
			<div class="flex-center flex-column">
				<h3 class="text-primary">Disfruta tu nueva área de trabajo :)</h3>
				<img src="/img/logos/logo.png" height="180" alt="HSTW">
			</div>
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

    $("#empezar").click(function() {
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
		return false;
	});
</script>
@endsection
