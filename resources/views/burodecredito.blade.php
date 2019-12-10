@extends('layouts.interface')
@section('CSS')
<link rel="stylesheet" href="css/burodecredito.css">

<style type="text/css">
  .btndoom{
    padding: 1px !important;
    background-color:rgba(255,0,0,0.0) !important;
    width: 11%;
  }
  .icoposition{
    padding: -40px !important;
  }
  .btncenter{
    margin-left: 45% !important;
  }
</style>
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

        <form action="regpdf" method="post" accept-charset="utf-8">
        @csrf
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

                        @csrf
                        <button name='btniduser' value='{{$reg->id}}' class="btncenter btn btn-info btn-block btndoom" type="submit"><i class="icoposition fas fa-exclamation-circle fa-lg text-warning" data-toggle="popover-hover" data-content='Pagando'></i></button>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 3)
                        <button name='btniduser' value='{{$reg->id}}' class="btncenter btn btn-info btn-block btndoom" type="submit"><i class="icoposition fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i></button>
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
                        <button name='btniduser' value='{{$reg->id}}' class="btn btn-info btn-block btndoom" type="submit"><i class="icoposition fas fa-exclamation-circle fa-lg text-warning" data-toggle="popover-hover" data-content='Pagando'></i></button>
                      @endif
                      @if($reg->buro[0]->calificacion_cliente == 3)
                        <button name='btniduser' value='{{$reg->id}}' class="btn btn-info btn-block btndoom" type="submit"><i class="icoposition fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i></button>
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
          </form> 
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
