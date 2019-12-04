@extends('layouts.interface')
@section('CSS')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/DataTables-1.10.20/extensions/Editor-1.9.2/css/editor.bootstrap.css">
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
                                        <label data-error="wrong" data-success="right" for="inputestado">Estado</label>
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
        </div>
        <div class="table-responsive">
             <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm" hidden>id
                </th>
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
                <th class="th-sm">Gestion
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $clien)
                <tr>
                    <td id="buttonid" hidden>{{$clien->id}}</td>
                    <td>{{$clien->nom}}</td>
                    <td>{{$clien->apeP.' '.$clien->apeM}}</td>
                    <td>{{$clien->f_nac}}</td>
                    <td>{{$clien->CURP}}</td>
                    <td>{{$clien->RFC}}</td>
                    <td>{{$clien['direcciones'][0]->calle.'  '.$clien['direcciones'][0]->num_int.'  '.$clien['direcciones'][0]->num_ext.'  '.$clien['direcciones'][0]->calles.'  '.$clien['direcciones'][0]->cp.'  '.$clien['direcciones'][0]->colonia.'  '.$clien['direcciones'][0]->ciudad.'  '.$clien['direcciones'][0]->estado.'  '.$clien['direcciones'][0]->pais}}</td>
                    <td>
                      <center>
                        <form type="GET" action="/editar">
                            <input type="text"  name="id" value="{{$clien->id}}" hidden>
                            <button  title='Editar'  type="submit" class="btn btn-success btn-rounded btn-sm buttonEdit" ><i class="fas fa-pen-square ml-1"></i></button>
                        </form>

                        <form type="GET" action="/eliminar">
                            <input type="text"  name="del_idc" value="{{$clien->id}}" hidden>
                            <input type="text"  name="del_idd" value="{{$clien['direcciones'][0]->id}}" hidden>
                            <button  title='Eliminar' type="submit" class="btn btn-danger btn-rounded btn-sm buttonEdit" ><i class="fas fa-trash-alt ml-1"></i></button>
                        </form>
                      </center>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
@section('JS')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#dtBasicExample').DataTable( {
                dom: 'Bfrtip',
                select: true
            } );
        } );
    </script>
@endsection
