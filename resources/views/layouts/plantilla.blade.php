<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('img') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        <div class="logo">
            <a href="/"><img src="img/logo_Theranet.png" alt="Logo"></a>
        </div>
        <input type="checkbox" id="toggle">
        <label for="toggle"><img class="menu" src="img/menu.png" alt="menu"></label>
        <nav class="navigation">
            <ul>
                <li><a href="/">INICIO</a></li>
                <li><a href="nosotros">NOSOTROS</a></li>
                <li><a href="serviciosGenerales">SERVICIOS</a></li>
                <li><a href="tvTheranet">TV THERANET</a></li>
                <li><a href="contactanos">CONTACTANOS</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <div class="p-5 footer">
        <div class="container">
            <footer class="page-footer font-small mdb-color lighten-3 pt-4">
                <div class="container text-center text-md-left">
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                            <!-- Horario -->
                            <h5 class="font-weight-bold text-uppercase mb-4 text-center">Horario de atención</h5>
                            <h6 class="font-weight-bold text-uppercase mb-4 text-center">Lunes-Viernes</h6>
                            <p class="mb-4 text-center">8:00 am - 10:00 pm</p>
                            <h6 class="font-weight-bold text-uppercase mb-4 text-center">Sábado-Domingo</h6>
                            <p class=" mb-4 text-center">9:00 am - 10:00 pm</p>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none">
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                            <!-- Polar fitness -->
                            <h5 class="font-weight-bold text-uppercase mb-4">THERANET</h5>
                            <ul class=" flex-column ">
                                <li class="nav-item mb-2"><a href="/" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">Inicio</a></li>
                                <li class="nav-item mb-2"><a href="nosotros" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">Nosotros</a></li>
                                <li class="nav-item mb-2"><a href="serviciosGenerales" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">Servicios</a></li>
                                <li class="nav-item mb-2"><a href="tvTheranet" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">TV Theranet</a></li>
                                <li class="nav-item mb-2"><a href="contactanos" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">Contáctanos</a></li>
                                <li class="nav-item mb-2"><a href="mapaSitio" target="_blank"
                                        class="nav-link p-0 fw-bold text-dark">Mapa de sitio</a></li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none">
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                            <!-- Atencion Clientes -->
                            <ul class=" flex-column ">
                                <h5 id="Pie" class="text-md-center"><u>Atención al cliente</u></h5>
                                <li class="nav mb-2"><a href="reclamos" target="_blank"
                                        class="nav-link p-0 fw-bold col text-center  text-dark" id="Pie">Libro
                                        de reclamaciones</a></li>
                                <br>
                                <h5 id="Pie" class="text-md-center "> <u>Contáctenos</u></h5>
                                <li class="nav mb-2"><a class="nav-link p-0 fw-bold text-center  text-dark"
                                        id="Pie">Puedes contactarnos en nuestra central o correo:</a></li>
                                <li class="nav mb-2 "><a class="nav-link p-0 fw-bold col text-center  text-dark"
                                        id="Pie"> Tlf. 979216404</a></li>
                                <li class="nav mb-2 "><a class="nav-link p-0 fw-bold col text-center  text-dark"
                                        id="Pie"> ventas@theranet.pe</a></li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none">
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                            <!-- Social buttons -->
                            <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                            <div class=" text-uppercase mb-4">
                                <div class="col">
                                    <button class="btnRedesFB btn-outline-primary w-80 my-2">
                                        <a href="https://www.facebook.com/profile.php?id=100090098111180"
                                            target="_blank"><img src="img/Facebook_Logo_(2019).png" width="25"></a>
                                    </button>
                                </div>
                                <br>
                                <div class="col">
                                    <button class="btnRedesWP btn-outline-success w-80 my-2">
                                        <a href="https://api.whatsapp.com/send?phone=51960879826&app=facebook&entry_point=page_cta&fbclid=IwAR07F62cf0MaMxpHgJOIay847ZCwubSKQPO8GdpM04XnFQjfZi9jIkk82V4"
                                            target="_blank"><img src="img/logo whatsapp.png" width="25"></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class=" flex-column">
                            </a></li>
                        </ul>

                    </div>
                </div>
        </div>
        <!-- Copyright -->
        <div class="d-flex  py-4 my-4 border-top  ">
            <p id="Pie" class="col text-center">&copy; 2023 Todos los Derechos Reservados - THERANET E.I.R.L</p>
        </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>

</html>
