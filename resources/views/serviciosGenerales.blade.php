@extends('layouts.plantilla')

@section('title', 'Theranet - Servicios de Internet')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>SERVICIOS</i></b>
                </h4>
            </div>
        </div>
    </div>

    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>¡Ofrecemos los mejores planes!</i></b></h4>
        <br>
        <h3 class="h4 text-shadow"><b><i>Theranet brinda servicios para dos líneas comerciales | Empresas y Hogar</i></b>
        </h3>
    </div>

    <br>
    <div class="d-flex justify-content-center">
        <div class="card mb-3 cardServicios" style="max-width: 75%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Internet_Negocios.jpg" class="img-fluid rounded-start" alt="Internet Negocios">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <div class="card-body">
                        <h4 class="card-title"><b>Negocios Conectados</b></h4>
                        <br>
                        <h5 class="card-text" style="text-align: center">Planes de Internet para Empresas con
                            Fibra óptica y
                            Wifi</h5>
                        <br>
                        <div>
                            <div class="card-body"
                                style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                <div class="planInfo">
                                    <p class="txt-plan"><img src="img/wifi.png" alt="Ícono">Internet Ilimitado</p>
                                    <p class="txt-plan"><img src="img/check_circle.png" alt="Ícono">Datos Ilimitados</p>
                                </div>
                                <br><br><a href="/serviciosEmpresas" class="btn">Ver Planes</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="d-flex justify-content-center">
        <div class="card mb-3 cardServicios" style="max-width: 75%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/Internet_Familia.jpg" class="img-fluid rounded-start" alt="Internet Negocios">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <div class="card-body">
                        <h4 class="card-title"><b>Internet para tu familia</b></h4>
                        <br>
                        <h5 class="card-text" style="text-align: center">Conoce nuestros planes para el Hogar con Fibra
                            óptica
                            e Internet Wifi</h5>
                        <br>
                        <div>
                            <div class="card-body"
                                style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                <div class="planInfo">
                                    <p class="txt-plan"><img src="img/wifi.png" alt="Ícono">Internet Ilimitado</p>
                                    <p class="txt-plan"><img src="img/check_circle.png" alt="Ícono">Datos Ilimitados</p>
                                </div>
                                <br><br><a href="/serviciosFamiliar" class="btn">Ver Planes</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>¡Escoge tu plan y disfruta de nuestro servicio!</i></b></h4>
        <br>
    </div>
@endsection
