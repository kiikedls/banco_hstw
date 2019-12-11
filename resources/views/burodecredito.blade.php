@extends('layouts.interface')
@section('CSS')
    <link rel="stylesheet" href="css/burodecredito.css">

    <style type="text/css">
        .btndoom {
            padding: 1px !important;
            background-color: rgba(255, 0, 0, 0.0) !important;
            width: 11%;
        }

        .icoposition {
            padding: -40px !important;
        }

        .btncenter {
            margin-left: 45% !important;
        }
    </style>
@endsection

@section('content')
    <div class="modal fade" id="exampleModalReporte" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Agregar mensaje</h5>
                    <button id="btn-numcliente" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">

                            <div class="form-group">
                                <label for="">Mensaje:</label>
                                <input type="text" class="form-control mensaje" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-generico-cancelar" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button id="confirmarReporte" class="btn btn-primary btn-generico confirmarReporte">
                        Confirmar
                    </button>

                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid rounded-lg">
        <div class="card container-fluid">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                {{csrf_field()}}
                <thead id='pachon'>
                <tr>
                    <th class="th-sm text-center">Folio
                    </th>
                    <th class="th-sm text-center">Nombre
                    </th>
                    <th class="th-sm text-center">Fecha de Nacimiento
                    </th>
                    <th class="th-sm text-center">Estado
                    </th>
                    <th class="th-sm text-center">Generar Reporte
                    </th>
                </tr>
                </thead>
                <tbody>

                @if($notienen != null && $tienen != null)
                    @foreach($notienen as $reg)
                        <tr>
                            <input type="hidden" value="{{$reg->id}}" class="id">
                            <td class="text-center"> {{$reg->id}} </td>
                            <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                            <td class="text-center"> {{$reg->f_nac}} </td>
                            <td class="text-center">
                                <i class="fas fa-smile-beam fa-lg text-success " data-toggle="popover-hover"
                                   data-content='Libre de Adeudos'></i>
                            </td>
                            <td class="text-center">
                                <div class="col offset-5"></div>
                                <div class="col">

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($tienen as $reg)
                        <tr>
                            <input type="hidden" value="{{$reg->id}}" class="id">
                            <td class="text-center"> {{$reg->id}} </td>
                            <td class="text-center"> {{$reg->nom.' '.$reg->apeP.' '.$reg->apeM}} </td>
                            <td class="text-center"> {{$reg->f_nac}} </td>
                            <td class="text-center">
                                @if($reg->buro[0]->calificacion_cliente == 1)
                                    <i class="fas fa-smile-beam fa-lg text-success" data-toggle="popover-hover"
                                       data-content='Libre de Adeudos'></i>
                                @endif
                                @if($reg->buro[0]->calificacion_cliente == 2)
                                    <i class="icoposition fas fa-exclamation-circle fa-lg text-warning"
                                       data-toggle="popover-hover" data-content='Pagando'></i>
                                @endif
                                @if($reg->buro[0]->calificacion_cliente == 3)
                                    <i class="icoposition fas fa-exclamation-triangle fa-lg text-danger"
                                       data-toggle="popover-hover" data-content='En Buro'></i>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="col offset-5"></div>
                                <div class="col">
                                    <button value="{{$reg->id}}" class="btn btn-primary btn-report font-weight-bold"
                                            data-toggle="modal" data-target="#exampleModalReporte">reporte
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>

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
                content: function () {
                    return '<img src="' + $(this).data('img') + '" />';
                }
            });

            $('.table').on('click', '.btn-report', function () {
                var token = $('input[name=_token]').val();
                var id = $(this).val();
                console.log(id);
                $('body').on('click', '#confirmarReporte', function () {
                    var mensaje = $('.mensaje').val();
                    console.log(id, mensaje);
                    $.ajax({
                        url: "/ppdf",
                        type: 'POST',
                        datatype: 'json',
                        data: {
                            id: id,
                            mensaje: mensaje,
                            _token: token
                        },
                        success:function(response) {
                            alert(response);
                             var pdf = window.open("");
                            pdf.document.write("<iframe width='100%' height='100%'" +
                                " src='data:application/pdf;base64,"+encodeURI(response)+"'></iframe>");
                            location.href = '/burodecredito';
                        }, error:function(){ alert("error") },
                    });
                })
            });
        });
    </script>
@endsection

