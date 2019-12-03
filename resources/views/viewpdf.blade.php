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
<table class="table">
    <thead class="black white-text">
    <tr>
        <th scope="col">Número de pago</th>
        <th scope="col">Fecha de pago</th>
        <th scope="col">Cuota</th>
        <th scope="col">Interés</th>
        <th scope="col">Capital amortizado</th>
        <th scope="col">Capital final</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>
<div class="text-center">
    <a href="/download" class="btn blue-gradient">Descargar</a>
</div>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
