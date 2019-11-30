@extends('layouts.interface')

@section('CSS')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('content')

<div class="view intro-2">
    <div class="full-bg-img">
        <div class="mask flex-center">
            <div class="container text-center white-text wow fadeInUp">
                <h2 class="display-1 font-weight-bold">Bienvenido al SWPC</h2>
                <br>
                <h5>Sistema web de préstamos y cobranza</h5>
                En este sitio podrás desempeñarte como trabajador de <b>HSTW Banco</b> de forma más ágil y rápida
                <br>
                <a class="btn btn-lg btn-outline-white mt-5 mx-auto" href="#">EMPEZAR</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <p class="text-justify my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.</p>
</div>

@endsection

@section('JS')
<script type="text/javascript">
    var nav = $('.navbar');

    nav.removeClass('blue-gradient');
    nav.addClass('fixed-top z-depth-0');

    $('#container').removeClass('container-fluid mt-4');

</script>
@endsection
