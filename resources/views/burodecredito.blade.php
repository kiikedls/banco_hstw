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
          <th class="th-sm text-center">Estado
          </th>
        </tr>
      </thead>
      <tbody>  
            @if($notienen != null && $tienen != null)
              @foreach($notienen as $reg)
                  <tr>
                    <td class="text-center"> {{$reg->id}} </td>
                    <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                    <td class="text-center"> {{$reg->f_nac}} </td>
                    <td class="text-center">
                      <i class="fas fa-smile-beam fa-lg text-success " data-toggle="popover-hover" data-content='Libre de Adeudos'></i>
                    </td>
                  </tr>
              @endforeach
              @foreach($tienen as $reg)
                  <tr>
                    <td class="text-center"> {{$reg->id}} </td>
                    <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                    <td class="text-center"> {{$reg->f_nac}} </td>
                    <td class="text-center">
                      @if($reg->buro[0]->calificacion_cliente == 1)
                        <i class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos' ></i>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 2)
                        <i class="fas fa-exclamation-circle fa-lg text-warning" onclick='generar_reporte({{$reg->id}})' data-toggle="popover-hover" data-content='Pagando'></i>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 3)
                      <i class="fas fa-exclamation-triangle fa-lg text-danger" onclick='generar_reporte({{$reg->id}})' data-toggle="popover-hover" data-content='En Buro'></i>
                      @endif
                    </td>
                  </tr>
              @endforeach
            @endif
            @if($notienen == null && $tienen != null )
              @foreach($tienen as $reg)
                  <tr>
                    <td class="text-center"> {{$reg->id}} </td>
                    <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                    <td class="text-center"> {{$reg->f_nac}} </td>
                    <td class="text-center">
                      @if($reg->buro[0]->calificacion_cliente == 1)
                        <i id="btninfo" class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos' ></i>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 2)
                        <i class="fas fa-exclamation-circle fa-lg text-warning reporte" data-toggle="popover-hover" data-content='Pagando' onclick='generar_reporte({{$reg->id}})'></i>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 3)
                      <i class="fas fa-exclamation-triangle fa-lg text-danger reporte" data-toggle="popover-hover" data-content='En Buro' onclick='generar_reporte({{$reg->id}})'></i>
                      @endif
                    </td>
                  </tr>
              @endforeach
            @endif
            @if($notienen != null && $tienen == null )
              @foreach($notienen as $reg)
                  <tr>
                    <td class="text-center"> {{$reg->id}} </td>
                    <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                    <td class="text-center"> {{$reg->f_nac}} </td>
                    <td class="text-center">
                      <i id="btninfo" class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos'></i>

                    </td>
                  </tr>
              @endforeach
            @endif
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

<script>
  function generar_reporte(words)
  {
    alert(words);
  }
</script>

@endsection
