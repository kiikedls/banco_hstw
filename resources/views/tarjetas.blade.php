@extends('layouts.interface')
@section('CSS')
    <!--
Aquí linkearás el CSS generado por SASS
<link rel="stylesheet" href="css/example.css"> -->
    <link rel="stylesheet" href="css/miestilo.css">
@endsection

@section('content')
    <!-- Material form contact -->
    <div class="card container">
        <div class="card-header info-color row">
            <h5 id="titulo" class="white-text text-right col py-">
                <strong>Asignar tarjeta</strong>
            </h5>

            {{--<div class="col">
                <select class="browser-default custom-select">
                    <option selected>Tipo tarjeta</option>
--}}{{--                    <option value="1">Crédito</option>--}}{{--
--}}{{--                    <option value="2">Debito</option>--}}{{--
                        <option value="{{$tp[0]->id}}">{{$tp[0]->tipo}}</option>
                        <option value="{{$tp[0]->id}}">{{$tp[1]->tipo}}</option>
                </select>
            </div>--}}
        </div>

        <p id="info">puedes asignar tarjeta según el número de cliente o el nombre y fecha de nacimiento...</p>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 row">

            <!-- Form -->
            <form class="text-center col" style="color: #757575;" action="/infotarjeta1" method="post">
                @csrf
                <select name="tipt" class="browser-default custom-select" required>
                    <option selected>Tipo tarjeta</option>
                    <option value="{{$tp[0]->id}}">{{$tp[0]->tipo}}</option>
                    <option value="{{$tp[1]->id}}">{{$tp[1]->tipo}}</option>
                </select>
                <!-- numero de cliente -->
                <div class="md-form mt-3">
                    <input type="text" name="nocli" id="materialContactFormName" class="form-control" required>
                    <label for="materialContactFormName">No. cliente</label>
                </div>

                <!-- RFC -->
                <div class="md-form">
                    <input type="text" name="rfc" id="rfc" class="form-control" required>
                    <label for="rfc">RFC</label>
                </div>
                <!-- CURP -->
                <div class="md-form">
                    <input type="text" name="curp" id="materialContactForcurp" class="form-control" required>
                    <label for="curp">CURP</label>
                </div>
                <!-- select -->


                <!-- Send button -->
                <button id="sen1" class="btn blue-gradient btn-block z-depth-0 my-4 waves-effect" type="submit">Asignar</button>
            </form>
            <!-- Form -->

            <!-- Form -->
            <form class="text-center col" style="color: #757575;" action="/infotarjeta2">
                <select  class="browser-default custom-select" required>
                    <option selected>Tipo tarjeta</option>
                    {{--                    <option value="1">Crédito</option>--}}
                    {{--                    <option value="2">Debito</option>--}}
                    <option value="{{$tp[0]->id}}">{{$tp[0]->tipo}}</option>
                    <option value="{{$tp[0]->id}}">{{$tp[1]->tipo}}</option>
                </select>
                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" name="nom" id="materialContactFormName" class="form-control" required>
                    <label for="nom">Nombre completo</label>
                </div>

                <!-- fecha de nacimiento -->
                fecha de nacimiento: <input id="datepicker" name="nac" type="date" required>

                <!-- Send button -->
                <button id="send2" class="btn blue-gradient btn-block z-depth-0 my-4 waves-effect" type="submit">Asignar</button>
            </form>
            <!-- Form -->
        </div>
    </div>
    <!-- Material form contact -->
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
