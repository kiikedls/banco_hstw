@extends('layouts.resources')

@section('main-CSS')
<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/interface.css">
@yield('CSS')
@endsection

@section('main-content')
	<!-- Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark blue-gradient scrolling-navbar py-1">
		<div class="container">
			<!-- Brand -->
			<a class="navbar-brand" href="/">
				<img src="/img/logos/logo_white.png" height="48" alt="HSTW">
			</a>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="navContent">
				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/">Inicio</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" href="#" id="navDropClientes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated fadeIn" aria-labelledby="navDropClientes">
							<a class="dropdown-item waves-effect waves-light" href="#">Área de cobranza</a>
							<a class="dropdown-item waves-effect waves-light" href="{{url('/clientes')}}">Gestión de clientes</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" href="#" id="navDropPrestamos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Préstamos</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated fadeIn" aria-labelledby="navDropPrestamos">
							<a class="dropdown-item waves-effect waves-light" href="#">Asignar préstamos</a>
							<a class="dropdown-item waves-effect waves-light" href="#">Reportes</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/burodecredito">Verificar buro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/tarjetas">Asignar tarjeta</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user mr-1"></i>
							Pasillas
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated fadeIn" aria-labelledby="userDropdown">
							<a class="dropdown-item waves-effect waves-light" href="#">Cerrar sesión</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- Collapsible content -->

		</div>
	</nav>
	<!--/.Navbar-->

	<div class="container-fluid mt-4" id="container">
		@yield('content')
	</div>
@endsection

@section('main-JS')
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$.extend( true, $.fn.dataTable.defaults, {
		language: {
			url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
		}
	} );
</script>
@yield('JS')
@endsection
