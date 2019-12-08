@extends('layouts.interface')

@section('content')
<h1 class="text-primary">Área de cobranza</h1>
<p class="font-italic mb-4">Información de clientes con pagos atrasados</p>

<table class="table table-responsive-lg" id="cobranzaTable">
	<thead class="blue-gradient white-text">
		<tr>
            <th scope="col" hidden>id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellidos</th>
			<th scope="col">Fecha de nacimiento</th>
			<th scope="col">CURP</th>
			<th scope="col" hidden>RFC</th>
			<th class="font-weight-bold peach-gradient" scope="col">Pagos atrasados</th>
			<th scope="col">Cuota de pagos atr.</th>
			<th scope="col">Detalles</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($clientes as $client)
		<tr>
            <th class="info-id" hidden>{{$client->id}}</th>
			<th class="info-nom" scope="row">{{$client->nom}}</th>
			<td class="info-ape">{{ $client->apeP.' '.$client->apeM }}</td>
			<td class="info-nac">{{ $client->f_nac }}</td>
			<td class="info-curp">{{ $client->CURP }}</td>
			<td class="info-rfc" hidden>{{ $client->RFC }}</td>
			<td class="font-weight-bold">{{ $client->pagos_atrasados()->count() }}</td>
			<td>{{ $client->pagos_atrasados()->sum('cuota') }}</td>
			<td>
				<button class="btn btn-sm peach-gradient m-0 px-3 hoverable" id="btn-atrasados">PAGOS ATRASADOS</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<!-- Prestamos -->
<div class="modal fade" id="prestaModal" tabindex="-1" role="dialog" aria-labelledby="prestaModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header peach-gradient white-text">
				<h5 class="modal-title" id="exampleModalLabel">Pagos atrasados</h5>
				<button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modalBody">
				<h5>Datos del cliente</h5>
				<div class="row" id="info-client">
					<div class="col-md-7">
						<label class="font-weight-light small" for="info-nom">Cliente</label>
						<p id="info-nom"></p>
					</div>
					<div class="col-md-5">
						<label class="font-weight-light small" for="info-nac">Nacimiento</label>
						<p id="info-nac"></p>
					</div>
					<div class="col-md-7">
						<label class="font-weight-light small" for="info-curp">CURP</label>
						<p id="info-curp"></p>
					</div>
					<div class="col-md-5">
						<label class="font-weight-light small" for="info-rfc">RFC</label>
						<p id="info-rfc"></p>
					</div>
				</div>

				<hr class="bg-primary">

				<h5>Pagos atrasados por préstamo</h5>
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
    modalBody = $('#modalBody');

    $('#btn-atrasados').click(function () {
        tr = $(this).closest('tr');
        row = $('#info-client');

        id = tr.find('.info-id').text();
        nom = tr.find('.info-nom').text() + ' ' + tr.find('.info-ape').text();
        nac = tr.find('.info-nac').text();
        curp = tr.find('.info-curp').text();
        rfc = tr.find('.info-rfc').text();

        row.find('#info-nom').text(nom);
        row.find('#info-nac').text(nac);
        row.find('#info-curp').text(curp);
        row.find('#info-rfc').text(rfc);

        $.ajax({
			url: '/pagos_atrasados',
			data: {id, _token: '{{ csrf_token() }}'},
			type: 'POST',
			dataType: 'json',
			error: function(response){
				console.log(response.responseText);
			},
			success: function(response){
                //prestamos id
                prestamos_ids = [];
                first_i = true;
                $.each(response, function (i, pago) {
                    newId = pago.prestamo_id;

                    if (first_i || newId != prestamos_ids[prestamos_ids.length - 1])
                        prestamos_ids.push(newId);
                });

                $.each(prestamos_ids, function (i, id) {
                    $.each(response, function (i, pago) {
                        if (pago.prestamo_id == id) {
                            modalBody.append('<h6 class="mt-3">Prestamo '+id+'</h6>' +
                                '<table class="table table-responsive-lg z-depth-1"><thead>' +
                                '<th>Fecha límite</th>' +
                                '<th>Fecha de pago</th>' +
                                '<th>Cuota</th>' +
                                '<th>Interés</th>' +
                                '<th>Total c/i</th></thead><tbody>' +
                                '<th>' + pago.fecha + '</th>' +
                                '<th>' + pago.fecha + '</th>' +
                                '<th>' + pago.fecha_pago + '</th>' +
                                '<th>' + pago.cuota + '</th>' +
                                '<th>' + pago.interes + '%</th>' +
                                '<th>Pendiente</th></tbody></table>');
                        }
                    });
                });
			}
		});

        $('#prestaModal').modal();
    });
</script>
@endsection
