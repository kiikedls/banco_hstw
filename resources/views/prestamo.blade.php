@extends('layouts.interface')
@section('CSS')
    <!--
Aquí linkearás el CSS generado por SASS
<link rel="stylesheet" href="css/example.css"> -->
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="css/prestamos.css">
@endsection

@section('content')
    <!-- Material form contact -->
    <div class="card container">
        <div class="card-header info-color">
            <h5 id="titulo" class="white-text text-center py-">
                <strong>Asignar prestamo</strong>
            </h5>
        </div>

        <p id="info">puedes asignar un prestamo según el número de cliente o el nombre y fecha de nacimiento...</p>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 row">

            <!-- Form -->
            <form class="text-center col" id="presta1" style="color: #757575;" action="/presta" method="post">
                @csrf

                <!-- numero de cliente -->
                <div class="md-form mt-3">
                    <input type="text" name="Num" id="Num" class="form-control" required>
                    <label for="Num">No. cliente</label>
                </div>

                <!-- RFC -->
                <div class="md-form">
                    <input type="text" name="RFC" id="RFC" class="form-control" required>
                    <label for="RFC">RFC</label>
                </div>
                <!-- CURP -->
                <div class="md-form">
                    <input type="text" name="CURP" id="CURP" class="form-control" required>
                    <label for="CURP">CURP</label>
                </div>

                <!-- concepto -->
                <div class="md-form">
                    <input type="text" name="concepto" id="concepto" class="form-control" required>
                    <label for="concepto">concepto</label>
                </div>
                <!-- periodo -->
                <div class="md-form">
                    <input type="text" name="periodo" id="periodo" class="form-control" required>
                    <label for="periodo">periodo</label>
                </div>
                    <!-- Subject -->
                    <select name="tipp" class="browser-default custom-select" required>
                        <option selected>Tipo prestamo</option>
                        <option value="quincenal">Quincenal</option>
                        <option value="mensual">Mensual</option>
                    </select>
                    <!-- Monto -->
                    <div class="md-form">
                        <input type="text" name="monto" id="monto" class="form-control" required>
                        <label for="monto">monto</label>
                    </div>
                <button id="verifica" type="button" class="btn btn-outline-success btn-md waves-effect">verificar vuro</button>
                <!-- Send button -->
                <button id="sen1" class="btn blue-gradient btn-block z-depth-0 my-4 waves-effect" type="submit">Asignar</button>

            </form>
            <!-- Form -->

            <!-- Form -->
            <form class="text-center col" style="color: #757575;" action="!#" method="post">
                @csrf

                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" name="Name" id="Name" class="form-control">
                    <label for="Name">Nombre completo</label>
                </div>

                <!-- fecha de nacimiento -->
                fecha de nacimiento: <input id="datepicker" type="date">

                <!-- Send button -->
                <button id="verifica2" type="button" class="btn btn-outline-success btn-md btn-block waves-effect">verificar vuro</button>
                <button id="send2" class="btn blue-gradient btn-block z-depth-0 my-4 waves-effect" type="submit">Asignar</button>

            </form>
            <!-- Form -->
        {{--</div>
        <div id="element" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>--}}
{{--        <div id="notificacion" class="col-md-3"></div>--}}

    </div>
        <div id="notificacion" class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
    <script>
        $('#element').toast('show');
        $(document).ready(function () {
            $("#verifica").click(function () {
                var idcli=$("#Num").val();
                var _token='{{csrf_token()}}';
                // div_msj.empty();
                $("#notificacion").empty();

                $.ajax({
                    url:'/verburo',
                    data:{idcli,_token},
                    type:'POST',
                    dataType:'json',
                    error:function (response) {
                        console.log(response);
                    },
                    success:function (response) {
                        // alert(response.msj);
                        // var mss;
                        // if (response.reg) {
                        //     // $("#notificacion").html(response.msj);
                        //     mss='<div class="alert alert-warning alert-dismissible fade show" role="alert">'+response.msj+
                        //     '<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
                        // }
                        // else {
                        //     mss="<div class='alert alert-success' role='alert'>"
                        //         +response.msj+"</div>"
                        // }
                        // $("#notificacion").html(response.msj);
                        $("#notificacion").append(response.msj);
                        // console.log(response);
                    }
                });
            });
            // var $route=""
        });
    </script>
@endsection
