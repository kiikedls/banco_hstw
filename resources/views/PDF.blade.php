<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/logos/favicon.ico">
    <title>Reporte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    @yield('main-CSS')
</head>
<body>
<center>
    <header class="clearfix">
        <div id="logo">
            <img class="logo" src="img/logos/logo.png" style="width: 20%">
        </div>

    </header>
</center>
<main>


    <table border="1" cellspacing="0" cellpadding="0" class="table table-bordered">

        <thead>
        <thead class="thead-dark">
        <tr class="bg-primary">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Datos Personales</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tr>


            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">RFC</th>

        </tr>

        @foreach($personas as $datper)
            <tr>
                <th>{{$datper->nom}}</th>
                <th>{{$datper->apeP}}</th>
                <th>{{$datper->apeM}}</th>
                <th>{{$datper->f_nac}}</th>
                <th>{{$datper->RFC}}</th>
            </tr>
        @endforeach

        <thead class="thead-dark">
        <tr class="bg-primary">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Domicilio(s)</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>


        </thead>


        <tr>

            <th scope="col">Calle y numero</th>
            <th scope="col">CP</th>
            <th scope="col">Colonia</th>
            <th scope="col">Ciudad y estado</th>
            <th scope="col">Pais</th>
        </tr>

        @foreach($personas as $dirper)
            <tr>
                <th>{{$dirper->direcciones[0]->calle.' '.$dirper->direcciones[0]->num_int}}</th>
                <th>{{$dirper->direcciones[0]->cp}}</th>
                <th>{{$dirper->direcciones[0]->colonia}}</th>
                <th>{{$dirper->direcciones[0]->ciudad.' '.$dirper->direcciones[0]->estado}}</th>
                <th>{{$dirper->direcciones[0]->pais}}</th>
            </tr>
        @endforeach


        <thead class="thead-dark">
        <tr class="bg-primary">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Creditos bancarios</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tr>
            <th scope="col">Institucion</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>

        </tr>

        @foreach($personas as $burper)
            <tr>
                <th>{{$burper->buro[0]->compania}}</th>
                <th>{{$burper->buro[0]->id}}</th>
                <th>{{$burper->buro[0]->info_adeudor}}</th>
                @if($burper->buro[0]->calificacion_cliente == 1)
                    <th>Bien</th>
                @endif
                @if($burper->buro[0]->calificacion_cliente == 2)
                    <th>Regular</th>
                @endif
                @if($burper->buro[0]->calificacion_cliente == 3)
                    <th>Malo</th>
                @endif

            </tr>
        @endforeach


        <thead class="thead-dark">
        <tr class="bg-primary">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Creditos no bancarios</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>


        <tbody>
        <tr>
            <th scope="col">Institucion</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>

        </tr>


        @foreach($personas as $burper)
            <tr>
                <th>{{$burper->buro[0]->compania}}</th>
                <th>{{$burper->buro[0]->id}}</th>
                <th>{{$burper->buro[0]->info_adeudor}}</th>
                @if($burper->buro[0]->calificacion_cliente == 1)
                    <th>Bien</th>
                @endif
                @if($burper->buro[0]->calificacion_cliente == 2)
                    <th>Regular</th>
                @endif
                @if($burper->buro[0]->calificacion_cliente == 3)
                    <th>Malo</th>
                @endif

            </tr>
        @endforeach


        </tbody>
    </table>
    <h2>{{$mensaje}}</h2>
</main>

<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
