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
{{ $registros}}
            @foreach($usuarios as $reg)
                <tr>
                  <td class="text-center"> {{$reg->id}} </td>
                  <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                  <td class="text-center"> {{$reg->f_nac}} </td>
                  <td class="text-center">
                    @if(count($registros == $reg->RFC) > 1)
                    SAD
                    @endif


                      0000-00-00
                  </td>
                  <td class="text-center">
                          <i class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos'></i>
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
