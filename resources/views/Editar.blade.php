@extends('layouts.interface')
@section('CSS')
    <link rel="stylesheet" href="css/gestioncli.css">
@endsection
@section('content')
    <h2 class="text-center">EDITAR</h2>
    <form method="POST" class="text-center  p-5" action="/actualizar">
        @csrf
        <center>
            <div class="modal-body mx-3 modal-inputs a">
                <h3 class="text-left mb-5 md-form">Datos Personales</h3>
                @foreach($cc as $datos)
                    <input type="text" name="id" value="{{$datos->id}}" hidden >
                    <div class="md-form mb-5">
                        <input type="text" name="nom" value="{{$datos->nom}}" id="inputName151" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputName151">Nombre</label>
                    </div>
                    <div class="form-row md-form mb-5">
                        <div class="col">
                            <input type="text" name="apeP" value="{{$datos->apeP}}" id="inputPosition151" class="form-control validate" required>
                            <label data-error="" data-success="" for="inputPosition151">Apellido Paterno</label>
                        </div>
                        <div class="col">
                            <input type="text" name="apeM" value="{{$datos->apeM}}" id="inputPosition181" class="form-control validate" required>
                            <label data-error="" data-success="" for="inputPosition181">Apellido Materno</label>
                        </div>
                    </div>
                    <div class="md-form mb-5">
                        <input type="date" name="f_nac" value="{{$datos->f_nac}}" id="inputDate151" class="form-control" placeholder="Select Date" required>
                        <label data-error="" data-success="" for="inputDate151">Fecha de Nacimiento</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="CURP" value="{{$datos->CURP}}" id="inputOfficeInput151" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputOfficeInput151">CURP</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="RFC" value="{{$datos->RFC}}" id="inputAge154" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputAge154">RFC</label>
                    </div>
                    <h3 class="text-left mb-5 md-form">Dirección</h3>
                    <input type="text" name="id_dir" value="{{$datos['direcciones'][0]->id}}" hidden>
                    <div class="md-form mb-5">
                        <input type="text" name="calle" value="{{$datos['direcciones'][0]->calle}}" id="inputDir125" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputDir125">Calle</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="colonia" value="{{$datos['direcciones'][0]->colonia}}" id="inputcOL1" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputcOL1">Colonía</label>
                    </div>
                    <div class="form-row md-form mb-4">
                        <div class="col">
                            <input type="text" name="num_int" value="{{$datos['direcciones'][0]->num_int}}" id="inputNint2" class="form-control validate" required>
                            <label data-error="" data-success="" for="inputNint2">Número Interior</label>
                        </div>
                        <div class="col">
                            <input type="text" name="num_ext" value="{{$datos['direcciones'][0]->num_ext}}" id="inputNext4" class="form-control validate" required>
                            <label data-error="" data-success="" for="inputNext4">Número Exterior</label>
                        </div>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="calles" value="{{$datos['direcciones'][0]->calles}}" id="inputcalles" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputcalles">Calles</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="cp" value="{{$datos['direcciones'][0]->cp}}" id="inputcp1" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputcp1">Código Postal</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="ciudad"  value="{{$datos['direcciones'][0]->ciudad}}" id="inputciudad1" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputciudad1">Ciudad </label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="estado" value="{{$datos['direcciones'][0]->estado}}" id="inputedo" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputedo">Estado</label>
                    </div>
                    <div class="md-form mb-5">
                        <input type="text" name="pais" value="{{$datos['direcciones'][0]->pais}}" id="inputpais1" class="form-control validate" required>
                        <label data-error="" data-success="" for="inputpais1">País</label>
                    </div>
                @endforeach
            </div>
        </center>
        <center>
            <button id="pad" class="btn btn-info btn-block " type="submit">Confirmar</button>
        </center>
    </form>
@endsection
@section('JS')
@endsection
