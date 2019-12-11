<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/logos/favicon.ico">
    <title>PDF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    @yield('main-CSS')
</head>
<body>
<form  method="POST"  action="/download">
    @csrf
    <div class="container">
        <div class="row justify-content-end">

            <div class="col-sm col">
            </div>

            <div class="col c z-depth-7 ">
                    <div class="titulo">
                        <div class="icono"></div>
                    </div>
                <div class="top">
                    <h6 class="title">Informacion</h6>
                </div>
                    <div class="form-group u md-form" >
                        <i class="fas fa-user prefix">sdfsdfsdfsd</i>
                        <input type="text" name="User" id="form1" class="form-control">
                        <label for="form1" class="white-text">Usuario</label>
                    </div>


                    <div class="form-group k md-form">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" name="Pass" id="fomr2" class="form-control">
                        <label for="fomr2" class="white-text">Contraseña</label>
                    </div>

                    <button type="submit" class="btn btn-indigo boton col-6">Ingresar</button>                
            </div>

            <div class="col-sm col">
            </div>
        </div>
    </div>
</form>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>