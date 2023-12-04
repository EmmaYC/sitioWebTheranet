@extends('layouts.plantilla')

@section('title', 'Theranet - Internet para Empresas')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>PLANES PARA EMPRESAS</i></b>
                </h4>
            </div>
        </div>
    </div>

    <div class="col-sm p-3 text-dark text-center ">
        <br>
        <h3 class="h4 text-shadow"><b><i>Conoce los mejores planes que tenemos para tu empresa y/o negocios</i></b>
        </h3>
    </div>

    <br>
    <div class="d-flex justify-content-center">
        <div class="card mb-3 cardPlan" style="max-width: 75%;">
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
                                <br><br><a href="#planesInternet" class="btn">Ver Planes</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="col-sm p-3 text-dark text-center" id="planesInternet">
        <h4 class="h4 text-shadow"><b><i>¡Elige el mejor plan para tu negocio!</i></b></h4>
        <hr class="horizontal-line">
    </div>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <div class="cardPlanEmpresas" style="max-width: 300px; margin-left: 170px;">
                <div class="card-body text-center"> <!-- Aplica la clase text-center al contenedor de la tarjeta -->
                    <br>
                    <h5 class="card-title-MBPS">Plan Internet</h5>
                    <br>
                    <p class="card-text-MBPS">15MBPS</p>
                    <p class="card-text-MBPS">S/50 x mes</p>
                    <hr class="horizontal-line-MBPS">
                    <br>
                    <p class="card-text-MBPS">Fibra Óptica</p>
                    <p class="card-text-MBPS">Interner Ilimitado</p>
                    <p class="card-text-MBPS" style="color: red">Ideal para 4 dispositivos</p>
                    <button type="button" class="btn-Empresas">Contratar</button>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <div class="cardPlanEmpresas">
                <div class="card-body text-center"> <!-- Aplica la clase text-center al contenedor de la tarjeta -->
                    <br>
                    <h5 class="card-title-MBPS">Plan Internet</h5>
                    <br>
                    <p class="card-text-MBPS">15MBPS</p>
                    <p class="card-text-MBPS">S/90 x mes</p>
                    <hr class="horizontal-line-MBPS">
                    <br>
                    <p class="card-text-MBPS">Fibra Óptica</p>
                    <p class="card-text-MBPS">Interner Ilimitado</p>
                    <p class="card-text-MBPS" style="color: red">Ideal para 4 dispositivos</p>
                    <button type="button" class="btn-Empresas">Contratar</button>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4">
            <div class= "cardPlanEmpresas" style="max-width: 300px; margin-left: 30px;">
                <div class="card-body text-center"> <!-- Aplica la clase text-center al contenedor de la tarjeta -->
                    <br>
                    <h5 class="card-title-MBPS">Plan Internet</h5>
                    <br>
                    <p class="card-text-MBPS">20MBPS</p>
                    <p class="card-text-MBPS">S/120 x mes</p>
                    <hr class="horizontal-line-MBPS">
                    <br>
                    <p class="card-text-MBPS">Fibra Óptica</p>
                    <p class="card-text-MBPS">Interner Ilimitado</p>
                    <p class="card-text-MBPS" style="color: red">Ideal para 6 dispositivos</p>
                    <button type="button" class="btn-Empresas">Contratar</button>
                </div>
            </div>
        </div>
    </div>


    <br>
@endsection
