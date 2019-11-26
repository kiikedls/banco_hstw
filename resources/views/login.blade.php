@extends('layouts.resources')
@section('main-content')
<body class="f img-fluid">
	<div class="container">
		<div class="row justify-content-end">

			<div class="col-sm"></div>

			<div class="col c z-depth-5 ">

				<div class="row">
					<div class="titulo">
						
						<div class="icono"></div>
					</div>
					
				</div>

				<div class="top">
					<h6 class="title">Bienvenido</h6>
				</div>


				<form action="{{ url("/sesion") }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group u md-form" >
						<i class="fas fa-user prefix"></i>
						<input type="text" name="User" id="form1" class="form-control">
						<label for="form1" class="white-text">Usuario</label>
						{!! $errors->first('User','<span class="help-block">Usuario Incorrecto</span>')!!}
					</div>


					<div class="form-group k md-form">
						<i class="fas fa-lock prefix"></i>
						<input type="password" name="Pass" id="fomr2" class="form-control">
						<label for="fomr2" class="white-text">Contraseña</label>
					</div>

					<button type="submit" class="btn btn-indigo boton">Iniciar Sesion</button>
				</form>


				
			</div>
			<div class="col-sm">
				
			</div>
		</div>
	</div>
</body>
@endsection
