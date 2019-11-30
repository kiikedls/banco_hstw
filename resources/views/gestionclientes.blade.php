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
                                <form action="/agregar" method="POST">
                                    @csrf
                                    <h3 class="text-left mb-5 md-form">Datos Personales</h3>
                                    <div class="md-form mb-5">
                                        <input type="text" name="nom" id="inputName15" class="form-control validate" >
                                        <label data-error="wrong" data-success="right" for="inputName15">Nombre</label>
                                    </div>
                                    <div class="form-row md-form mb-5">
                                        <div class="col">
                                            <input type="text" name="apeP" id="inputPosition15" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="inputPosition15">Apellido Paterno</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="apeM" id="inputPosition18" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="inputPosition18">Apellido Materno</label>
                                        </div>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="date" id="inputDate15" name="f_nac" class="form-control" placeholder="Select Date">
                                        <label data-error="wrong" data-success="right" for="inputDate15">Fecha de Nacimiento</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputOfficeInput15" name="CURP" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputOfficeInput15">CURP</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputAge15" name="RFC" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputAge15">RFC</label>
                                    </div>
                                    <h3 class="text-left mb-5 md-form">Dirección</h3>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputDir12" name="calle" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputDir12">Calle</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputcOL" name="colonia" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputcOL">Colonía</label>
                                    </div>
                                    <div class="form-row md-form mb-4">
                                        <div class="col">
                                            <input type="text" id="inputNint" name="num_int" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="inputNint">Número Interior</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="inputNext" name="num_ext" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="inputNext">Número Exterior</label>
                                        </div>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputcalles" name="calles" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputcalles">Calles</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputcp" name="cp" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputcp">Código Postal</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputciudad" name="ciudad" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputciudad">Ciudad </label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputestado" name="estado" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputestado">Ciudad </label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <input type="text" id="inputpais" name="pais" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="inputpais">País</label>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                        <button class="btn blue-gradient btn-block " type="submit" >Confirmar
                                            <i class="far fa-paper-plane ml-1"></i>
                                        </button>
                                    </div>
                                </form>
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
                            <h4 class="modal-title w-100 font-weight-bold cyan-text ml-5">Editar</h4>
                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 modal-inputs">
                            <h3 class="text-left mb-5 md-form">Datos Personales</h3>
                            <div class="md-form mb-5">
                                <input type="text" id="inputName151" class="form-control validate" >
                                <label data-error="wrong" data-success="right" for="inputName151">Nombre</label>
                            </div>
                            <div class="form-row md-form mb-5">
                                <div class="col">
                                    <input type="text" id="inputPosition151" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputPosition151">Apellido Paterno</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputPosition181" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputPosition181">Apellido Materno</label>
                                </div>
                            </div>
                            <div class="md-form mb-5">
                                <input type="date" id="inputDate151" class="form-control" placeholder="Select Date">
                                <label data-error="wrong" data-success="right" for="inputDate151">Fecha de Nacimiento</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputOfficeInput151" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputOfficeInput151">CURP</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputAge154" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputAge154">RFC</label>
                            </div>
                            <h3 class="text-left mb-5 md-form">Dirección</h3>
                            <div class="md-form mb-5">
                                <input type="text" id="inputDir125" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputDir125">Calle</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputcOL1" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputcOL1">Colonía</label>
                            </div>
                            <div class="form-row md-form mb-4">
                                <div class="col">
                                    <input type="text" id="inputNint2" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputNint2">Número Interior</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputNext4" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputNext4">Número Exterior</label>
                                </div>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputcp1" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputcp1">Código Postal</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputciudad1" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputciudad1">Ciudad </label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputpais1" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputpais1">País</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                            <button class="btn blue-gradient btn-block editInside" data-dismiss="modal">Editar
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center buttonEditWrapper">
                <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit15"
                        >Editar<i class="fas fa-pen-square ml-1"></i></button>
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
