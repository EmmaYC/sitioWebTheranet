@extends('layouts.plantilla')

@section('title', 'Theranet - Servicio de Internnet Wifi')

@section('content')

    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>¡El mejor proveedor de servicio de internet del norte del pais!</i></b>
                </h4>
            </div>
        </div>
    </div>
    <br>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner_theranet.png" class="d-block w-100" alt="banner">
            </div>
        </div>
    </div>

    <br>
    <div>
        <div class="container-md p-4" id="Caja1">
            <div class="row pt-3">
                <h3 class=" text-center pb-2 pt-2 h1"><b>¿Qué Ofrecemos?</b></h3>
            </div>
            <div class="row ">
                <div class="col-sm ">
                    <div class="card w-100 card-border mb-5" style="border: none;">
                        <div class="card-body" id="cardOfrecemos">
                            <img style="border-radius: 16px 16px 0 0;" src="img/theranet_ofrecemos.jpg" class="card-img-top"
                                id="cardOfrecemos" alt=".">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cardPro w-100 card-2 mb-4">
                        <div class=" card-body">
                            <p class="txt-ofrecemos"><img src="img/check_circle.png" alt="Ícono">Mejor Cobertura</p>
                            <br>
                            <p class="txt-ofrecemos"><img src=" img/check_circle.png" alt="Ícono">Disponibilidad</p>
                            <br>
                            <p class="txt-ofrecemos"><img src=" img/check_circle.png" alt="Ícono">Conexiones Wifi</p>
                            <br>
                            <p class="txt-ofrecemos"><img src=" img/check_circle.png" alt="Ícono">Velocidad hasta
                                1Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container-md p-4">
            <div class="row pt-3">
                <h3 class=" text-center pb-2 pt-2 h1"><b>Planes de Internet</b></h3>
                <div class="col-sm p-3 text-dark text-center ">
                    <br>
                    <h4 class="h4 text-shadow"><b><i>¡Elige el mejor plan para tu casa o negocio!</i></b></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0 cardPrincipal">
            <div class="card" id="card-planes">
                <div class="card-body cardPlanes">
                    <h2 class="card-title">Negocios Ilimitados</h2>
                    <br>
                    <p class="card-text" style="font-size: 20px; text-align: center">Solicita el mejor servicio de
                        internet con fibra óptica para tu negocio</p>
                    <div class="cardPlan">
                        <div class=" card-body">
                            <p class="txt-plan"><img src="img/wifi.png" alt="Ícono">Internet Ilimitado</p>
                            <p class="txt-plan"><img src="img/desktop.png" alt="Ícono">Datos Ilimitados</p>
                        </div>
                    </div>
                    <a href="/serviciosEmpresas" class="btn">Ver Planes</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" id="card-planes">
                <div class="card-body cardPlanes">
                    <h2 class="card-title">Entretenimiento para tu familia</h2>
                    <br>
                    <p class="card-text" style="font-size: 20px; text-align: center">Planes para Netflix, Trabajos y
                        Estudios desde casa</p>
                    <div class="cardPlan">
                        <div class=" card-body">
                            <p class="txt-plan"><img src="img/wifi.png" alt="Ícono">Internet Ilimitado</p>
                            <p class="txt-plan"><img src="img/tv.png" alt="Ícono">Datos Ilimitados</p>
                        </div>
                    </div>
                    <a href="/serviciosFamiliar" class="btn">Ver Planes</a>
                </div>
            </div>
        </div>
    </div>



    <div>
        <div class="container-md p-4" id="Caja1">
            <div class="row pt-3">
                <h3 class=" text-center pb-2 pt-2 h1"><b>TV THERANET</b></h3>
            </div>
            <div class="row ">
                <div class="col-sm ">
                    <div class="card w-100 card-border mb-5" style="border: none;">
                        <div class="card-body" id="cardTheranet">
                            <img style="border-radius: 16px 16px 0 0;" src="img/tv_theranet.jpg" class="card-img-top"
                                alt=".">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cardPro w-100 card-2 mb-4">
                        <div class=" card-body">
                            <p class="txt-tv">Llevamos entretenimiento a muchas familias</p>
                            <br>
                            <p class="txt-tv"><img src=" img/youtube.png" alt="Ícono">Videos y entretenimiento</p>
                            <br>
                            <p class="txt-tv"><img src=" img/movie.png" alt="Ícono">Tus programas favoritos</p>
                            <br>
                            <p class="txt-tv"><img src=" img/telefono.png" alt="Ícono">Conéctate desde cualquier
                                disposiivo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-beneficios">
        <h3 class=" text-center pb-2 pt-2 h1"><b>NUESTROS BENEFICIOS</b></h3>
        <br><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-beneficios" style="width: 18rem;">
                    <img src="img/internet_velocidad.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-beneficios">Mayor Velocidad</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-beneficios" style="width: 13.55rem;">
                    <img src="img/mejor_tecnologia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-beneficios">Mejor Tecnología</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-beneficios" style="width: 13.55rem;">
                    <img src="img/mejor_precio.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-beneficios">Mejor Precio</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-beneficios" style="width: 13.55rem;">
                    <img src="img/mejor_soporte.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-beneficios">Mejor Soporte</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
