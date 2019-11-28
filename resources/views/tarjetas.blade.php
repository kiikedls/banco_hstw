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
            <div class="col">
                <select class="browser-default custom-select">
                    <option selected>Tipo tarjeta</option>
                    <option value="1">Crédito</option>
                    <option value="2">Debito</option>
                </select>
            </div>
        </div>

        <p id="info">puedes asignar tarjeta según el número de cliente o el nombre y fecha de nacimiento...</p>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 row">

            <!-- Form -->
            <form class="text-center col" style="color: #757575;" action="#!">

                <!-- numero de cliente -->
                <div class="md-form mt-3">
                    <input type="text" id="materialContactFormName" class="form-control">
                    <label for="materialContactFormName">No. cliente</label>
                </div>

                <!-- RFC -->
                <div class="md-form">
                    <input type="email" id="materialContactFormEmail" class="form-control">
                    <label for="materialContactFormEmail">RFC</label>
                </div>
                <!-- CURP -->
                <div class="md-form">
                    <input type="email" id="materialContactFormEmail" class="form-control">
                    <label for="materialContactFormEmail">CURP</label>
                </div>
                <!-- select -->


                <!-- Send button -->
                <button id="sen1" class="btn blue-gradient btn-block z-depth-0 my-4 waves-effect" type="submit">Asignar</button>

            </form>
            <!-- Form -->

            <!-- Form -->
            <form class="text-center col" style="color: #757575;" action="#!">

                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" id="materialContactFormName" class="form-control">
                    <label for="materialContactFormName">Nombre completo</label>
                </div>

                <!-- fecha de nacimiento -->
                fecha de nacimiento: <input id="datepicker" type="date">

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
