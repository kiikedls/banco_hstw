@extends('layouts.interface')
@section('CSS')
    <link rel="stylesheet" href="css/gestioncli.css">
@endsection
@section('content')
<center>
    <form class="text-center border border-light p-5 a " action="/pdf" method="POST">
        @csrf
        <p class="h4 mb-4">Calcular Préstamo</p>
        <label>Solicitante</label>
        <select class="browser-default custom-select mb-4" required>
            <option  disabled>Seleccione:</option>
            @foreach($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->nom.' '.$persona->apeP.' '.$persona->apeM}}</option>
            @endforeach
        </select>
        <input type="number" id="indat" name="ndp" hidden>
        <input name="años" type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Años"  min="1" pattern="^[0-9]+" required>
        <label>Tipo de pago</label>
        <select  name="tipop" class="browser-default custom-select mb-4" required>
            <option  disabled>Seleccione:</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>
        <input type="number" name="interesc" step="any" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Tasa de interes" min="1" pattern="^[0-9]+" required>
        <input  name="capitalr" type="number" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Monto Requerido" min="1" pattern="^[0-9]+" required>

        <button class="btn btn-info btn-block" type="submit">Calcular</button>
    </form>
</center>
@endsection
@section('JS')
    <script>
        var rand_NumeroAleatorio = Math.round(Math.random()*999999);
        $('#indat').val(rand_NumeroAleatorio);
    </script>
@endsection