@extends('layouts.interface')
@section('CSS')
<link rel="stylesheet" href="css/burodecredito.css">
@endsection

@section('content')
<div class="container-fluid rounded-lg">

  <div class="card container-fluid">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead  id='pachon'>
        <tr>
          <th class="th-sm text-center">Folio
          </th>
          <th class="th-sm text-center">Nombre
          </th>
          <th class="th-sm text-center">Fecha de Nacimiento
          </th>
          <th class="th-sm text-center">Fecha de Registro Buro de Credito
          </th>
          <th class="th-sm text-center">Estado
          </th>
        </tr>
      </thead>
      <tbody>

            @foreach($registros as $reg)
                {{$reg}}

                <tr>
                  <td class="text-center"> {{$reg->id}} </td>
                  <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                  <td class="text-center"> {{$reg->f_nac}} </td>
                  <td class="text-center"> 2011/04/25</td>
                  <td class="text-center">
                  @if ($reg->id == 1)
                  <i class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos'></i>
                  @endif
                  @if ($reg->id == 2)
                  <i class="fas fa-exclamation-circle fa-lg text-warning" data-toggle="popover-hover" data-content='Pagando'></i>
                  @endif
                  @if ($reg->id == 3)
                    <i class="fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i>
                  @endif
                  </td>
                </tr>
            @endforeach
      </tbody>
    </table>
  </div>
<div>
@endsection

@section('JS')
<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    // popovers initialization - on hover
    $('[data-toggle="popover-hover"]').popover({
      html: true,
      trigger: 'hover',
      placement: 'bottom',
      content: function () { return '<img src="' + $(this).data('img') + '" />'; }
    });
  });
</script>
@endsection
