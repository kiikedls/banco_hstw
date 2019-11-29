@extends('layouts.interface')
@section('CSS')
<!--
Aquí linkearás el CSS generado por SASS
<link rel="stylesheet" href="css/example.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="wrapper-editor">
        <div class="row d-flex justify-content-center modalWrapper">
            <div class="modal fade addNewInputs" id="modalAdd15" tabindex="-1" role="dialog" aria-labelledby="modalAdd15"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Agregar</h4>
                            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 modal-add-inputs">
                            <h3 class="text-left mb-5 md-form">Datos Personales</h3>
                            <div class="md-form mb-5">
                                <input type="text" id="inputName15" class="form-control validate" >
                                <label data-error="wrong" data-success="right" for="inputName15">Nombre</label>
                            </div>
                            <div class="form-row md-form mb-5">
                                <div class="col">
                                    <input type="text" id="inputPosition15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputPosition15">Apellido Paterno</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputPosition18" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputPosition18">Apellido Materno</label>
                                </div>
                            </div>
                            <div class="md-form mb-5">
                                <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
                                <label data-error="wrong" data-success="right" for="inputDate15">Fecha de Nacimiento</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputOfficeInput15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputOfficeInput15">CURP</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputAge15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputAge15">RFC</label>
                            </div>
                            <h3 class="text-left mb-5 md-form">Dirección</h3>
                            <div class="md-form mb-5">
                                <input type="text" id="inputDir12" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputDir12">Calle</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputcOL" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputcOL">Colonía</label>
                            </div>
                            <div class="form-row md-form mb-4">
                                <div class="col">
                                    <input type="text" id="inputNint" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputNint">Número Interior</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputNext" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputNext">Número Exterior</label>
                                </div>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputcOL" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputcOL">Código Postal</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputciudad" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputciudad">Ciudad </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputpais" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputpais">País</label>
                            </div>
                        </div>

                        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                            <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Confirmar
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd15">Agregar<i
                            class="fas fa-plus-square ml-1"></i></a>
            </div>
            <div class="modal fade modalEditClass" id="modalEdit15" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Confirmar</h4>
                            <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 modal-inputs">
                            <div class="md-form mb-5">
                                <input type="text" id="formNameEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formNameEdit15">Name</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formPositionEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formPositionEdit15">Position</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formOfficeEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formOfficeEdit15">Office</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formAgeEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formAgeEdit15">Age</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formDateEdit" class="form-control datepicker">
                                <label data-error="wrong" data-success="right" for="formDateEdit15">Date</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                            <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Editar
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center buttonEditWrapper">
                <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit15"
                        disabled>Editar<i class="fas fa-pen-square ml-1"></i></button>
            </div>
            <div class="modal fade" id="modalDelete15" tabindex="-1" role="dialog" aria-labelledby="modalDelete15"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Eliminar</h4>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <p class="text-center h4">Estas seguro de eliminar el renglon?</p>
                        </div>
                        <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                            <button type="button" class="btn btn-outline-danger btnYesClass" id="btnYes15" data-dismiss="modal">Si
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btnNoClass" id="btnNo15" data-dismiss="modal">No
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete15"
                        disabled>Eliminar<i class="fas fa-times ml-1"></i></button>
            </div>
        </div>
        <div class="table-responsive">
             <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nombre
                </th>
                <th class="th-sm">Apellidos
                </th>
                <th class="th-sm">Fecha de Nacimiento
                </th>
                <th class="th-sm">CURP
                </th>
                <th class="th-sm">RFC
                </th>
                <th class="th-sm">Direccion
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $clien)
                <tr>
                    <td>{{$clien->nom}}</td>
                    <td>{{$clien->apeP.' '.$clien->apeM}}</td>
                    <td>{{$clien->f_nac}}</td>
                    <td>{{$clien->CURP}}</td>
                    <td>{{$clien->RFC}}</td>
                    <td>{{$clien['direcciones'][0]->calle.'  '.$clien['direcciones'][0]->num_int.'  '.$clien['direcciones'][0]->num_ext.'  '.$clien['direcciones'][0]->calles.'  '.$clien['direcciones'][0]->cp.'  '.$clien['direcciones'][0]->colonia.'  '.$clien['direcciones'][0]->ciudad.'  '.$clien['direcciones'][0]->estado.'  '.$clien['direcciones'][0]->pais}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
        </div>
    </div>
<!--
Esta es la sección principal donde incluirás tu trabajo.

El contenido esta por debajo del Navbar de la plantilla y
esta dentro de un <div class="container-fluid mt-4" id="container">
-->
@endsection


@section('JS')
    <script type="text/javascript"> //dtBasicExample
        $(document).ready(function() {
            var table = $('#dtBasicExample').DataTable( {
                dom: 'Bfrtip',
                select: true
            } );
        } );
        $('#dtBasicExample').mdbEditor({
            mdbEditor: true
        });
    </script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<!--
Puedes añadir código JavaScript y librerías.

Tu código aquí no afectará el trabajo de los demás
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
</script>
-->
@endsection
