@extends('layouts.interface')

@section('content')
<h1 class="text-primary">Área de cobranza</h1>
<p class="font-italic mb-4">Información de clientes con pagos atrasados</p>

<table class="table table-responsive-lg" id="cobranzaTable">
	<thead class="blue-gradient white-text">
		<tr>
			<th scope="col">Nombre</th>
			<th scope="col">Apellidos</th>
			<th scope="col">Fecha de nacimiento</th>
            <th scope="col">CURP</th>
            <th scope="col" hidden>RFC</th>
			<th scope="col">Pagos atrasados</th>
            <th scope="col">Total de pagos</th>
            <th scope="col">T. de pagos c/i</th>
			<th scope="col">Detalles</th>
		</tr>
	</thead>
	<tbody>
        @foreach ($clientes as $client)

        @endforeach
		<tr>
			<th scope="row">{{$client->nom}}</th>
			<td>{{ $client->apeP.' '.$client->apeM }}</td>
			<td>{{ $client->f_nac }}</td>
            <td>{{ $client->CURP }}</td>
            <td hidden>{{ $client->rfc }}</td>
			<td>{{ $client->pagos_atrasados()->count() }}</td>
            <td>4224</td>
            <td>5435</td>
			<td>
				<button class="btn btn-sm peach-gradient m-0 px-3 hoverable" data-toggle="modal"
					data-target="#prestaModal">PAGOS ATRASADOS</button>
			</td>
		</tr>
	</tbody>
</table>

<!-- Prestamos -->
<div class="modal fade" id="prestaModal" tabindex="-1" role="dialog" aria-labelledby="prestaModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header peach-gradient white-text">
				<h5 class="modal-title" id="exampleModalLabel">Pagos atrasados</h5>
				<button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Datos del cliente</h5>
				<div class="row">
					<div class="col-md-7">
						<label class="font-weight-light small" for="info-cliente">Cliente</label>
						<p id="info-cliente">Juan Angel Reyes Lira</p>
					</div>
					<div class="col-md-5">
						<label class="font-weight-light small" for="info-nac">Nacimiento</label>
						<p id="info-nac">24/06/1999</p>
					</div>
					<div class="col-md-7">
						<label class="font-weight-light small" for="info-curp">CURP</label>
						<p id="info-curp">RELJ990624HCLYRN00</p>
					</div>
					<div class="col-md-5">
						<label class="font-weight-light small" for="info-rfc">RFC</label>
						<p id="info-rfc">RELJ990624</p>
					</div>
				</div>

				<hr class="bg-primary">

				<h5>Prestamos (2)</h5>
                <h6 class="mt-3">Prestamo 1</h6>
                <table class="table table-responsive-sm z-depth-1">
                    <thead>
                        <th>Fecha límite</th>
                        <th>Fecha de pago</th>
                        <th>Cuota</th>
                        <th>Interés</th>
                        <th>Total c/i</th>
                    </thead>
                    <tbody>
                        <th scope="row">02/12/20</th>
                        <th></th>
                    </tbody>
                </table>
                <h6 class="mt-3">Prestamo 2</h6>
                <table class="table">
                    <thead>
                        <th>Fecha límite</th>
                        <th>Fecha de pago</th>
                        <th>Cuota</th>
                        <th>Interés</th>
                        <th>Total c/i</th>
                    </thead>
                </table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn purple-gradient" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('JS')
<script type="text/javascript">
	$('#cobranzaTable').DataTable();
</script>
@endsection
