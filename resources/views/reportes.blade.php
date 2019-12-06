@extends('layouts.interface')
@section('main-CSS')
<link rel="stylesheet" href="css/reporte.css">
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-md-center" align="center">
		<div>
			<p id="rfc">RFC:</p>
		</div>
		<div>
			{{csrf_field()}}
			<input type="text" id="search" placeholder=" Search...">
		</div>
	</div>
	<div class="container card" id="formulario">
		<div class="row justify-content-md-center white-text" id="reporte" >
			<strong>Reporte</strong>
		</div>
		<div class="row" id="centro" style="margin-top: 5px;">
			<h6 class="h6">Nombre:</h6>
			<h6 id="nombre"></h6>
		</div>
		<div class="row justify-content-md-center" id="centro">
			<div class="col-sm">
				<div class="row">
					<h6 class="h6">Años a Pagar:</h6>
					<h6 id="cantidad"></h6>
				</div>
				<div class="row">
					<h6 class="h6">Tipo de Pago:</h6>
					<h6 id="tipo"></h6>
				</div>
				<div class="row">
					<h6 class="h6">Taza de Interes:</h6>
					<h6 id="taza"></h6>
				</div>
			</div>
			<div class="col-sm">
				<div class="row">
					<h6 class="h6">Monto del Prestamo Solicitado:</h6>
					<h6 id="monto"></h6>
				</div>
				<div class="row">
					<h6 class="h6">Monto Total a Pagar:</h6>
					<h6 id="total"></h6>
				</div>
			</div> 
		</div>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">N° Pago</th>
						<th scope="col">Fecha de Pago</th>
						<th scope="col">Cuota a Pagar</th>
						<th scope="col">Interes</th>
						<th scope="col">Capital Amortizado</th>
						<th scope="col">Capital Final</th>
					</tr>
				</thead>
				<tbody id="renglon">
					
				</tbody>
			</table>
			
		</div>
	</div>
</div>
@endsection

@section('JS')


<script type="text/javascript">
	$(document).ready(function()
	{
		
		$('#search').keyup(function() {
			
			var busqueda=$('#search').val();
			var token=$('input[name=_token]').val();
			$.ajax({
				url:'/buscar',
				data:{consulta:busqueda, _token:token},
				type:'POST',
				datatype:'json',
				success:function(response)
				{
					console.log(response);

					$('#nombre').empty();
					$('#cantidad').empty();
					$('#tipo').empty();
					$('#taza').empty();
					$('#monto').empty();
					$('#total').empty();
					$('#renglon').empty();
					$.each(response, function(i,r) {
						
						$('#nombre').empty();
						$('#cantidad').empty();
						$('#tipo').empty();
						$('#taza').empty();
						$('#monto').empty();
						$('#total').empty();

						$('#nombre').append(r.nom);
						$('#cantidad').append(r.periodo);
						$('#tipo').append(r.tipo);
						$('#taza').append(r.interes+"%");
						$('#monto').append(r.monto);
						$('#total').append(r.monto);
						

					});
					$.each(response, function(i, r) {
						$('#renglon').append("<tr><td>"+r.pagos+"</td><td>"+r.fecha+"</td><td>"+r.cuota+"</td><td>"+r.interes+"</td><td>"+r.c_amortizacion+"</td><td>"+r.c_final+"</td></tr>");
					});

					
					
				}
				
			});
		});
	});
</script>

@endsection
