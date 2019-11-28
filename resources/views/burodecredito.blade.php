@extends('layouts.interface')
@section('CSS')
<link rel="stylesheet" href="css/burodecredito.css">
@endsection

@section('content')
<div class="container-fluid rounded-lg">
  <div class="card container-fluid red">
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
        <tr class="text-center">
          <td>103923</td>
          <td>Raul Alejandro</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i id="" class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos'></i>
          </td>
        </tr>
        <tr class="text-center">
          <td>103923</td>
          <td>Diana Laura</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i class="fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i>
          </td>
        </tr>
        <tr class="text-center">
          <td>103923</td>
          <td>Martha Herrrera</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i id="" class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover" data-content='Libre de Adeudos'></i>
          </td>
        </tr>
        <tr class="text-center">
          <td>103923</td>
          <td>Jhon Snow</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i class="fas fa-exclamation-circle fa-lg text-warning" data-toggle="popover-hover" data-content='En Buro'></i>
          </td>
        </tr>
        <tr class="text-center">
          <td>103923</td>
          <td>Pitoro Daimacu</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i class="fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i>
          </td>
        </tr>
        <tr class="text-center">
          <td>103923</td>
          <td>Carl Jhonson</td>
          <td>2011/04/25</td>
          <td>2011/04/25</td>
          <td>
            <i class="fas fa-exclamation-triangle fa-lg text-danger" data-toggle="popover-hover" data-content='En Buro'></i>
          </td>
        </tr>
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