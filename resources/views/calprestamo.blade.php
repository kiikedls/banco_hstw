@extends('layouts.interface')
@section('CSS')
    <link rel="stylesheet" href="css/gestioncli.css">
@endsection
@section('content')
<center>
    <form class="text-center border border-light p-5 a " action="#!">
        <p class="h4 mb-4">Calcular Préstamo</p>
        <label>Solicitante</label>
        <select class="browser-default custom-select mb-4" required>
            <option  disabled>Seleccione:</option>
            @foreach($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->nom.' '.$persona->apeP.' '.$persona->apeM}}</option>
            @endforeach
        </select>
        <input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Años" required>
        <label>Tipo de pago</label>
        <select class="browser-default custom-select mb-4" required>
            <option  disabled>Seleccione:</option>
            <option value="">Quincenal</option>
            <option value="">Mensual</option>
        </select>
        <input type="number" step="any" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Tasa de interes">
        <input type="number" step="any" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Monto Requerido">
        <input type="number" step="any" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Monto a Pagar">

        <button class="btn btn-info btn-block" type="submit">Send</button>
    </form>
</center>
@endsection
@section('JS')
<!--
Puedes añadir código JavaScript y librerías.

Tu código aquí no afectará el trabajo de los demás
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
</script>
-->
@endsection