@extends('layouts.plantilla')

@section('title', 'Theranet - Nosotros')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>NOSOTROS</i></b>
                </h4>
            </div>
        </div>
    </div>

    <div>
        <div class="container-md p-4" id="Caja1">
            <div class="row ">
                <div class="col-sm ">
                    <div class="card w-100 card-border mb-5" style="border: none;">
                        <div class="card-body" id="cardOfrecemos">
                            <img style="border-radius: 16px 16px 0 0;" src="img/nosotros.jpg" class="card-img-top"
                                id="cardOfrecemos" alt=".">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cardNosotros w-100 card-2 mb-4">
                        <div class=" card-body">
                            <p class="txt-ofrecemos"><img src="img/globo.png" alt="Ícono">Velocidad +
                                Entretenimiento</p>
                            <br>
                            <p class="txt-ofrecemos"><img src=" img/check_circle.png" alt="Ícono">Alta velocidad factible
                            </p>
                            <br>
                            <p class="txt-ofrecemos"><img src=" img/check.png" alt="Ícono">Conexión de banda ancha
                                y más</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>¡Theranet lo es todo en servicio de internet para todo destino!</i></b></h4>
        <br>
    </div>
    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>NUESTRO EQUIPO</i></b></h4>
        <br>
        <h3 class="h4 text-shadow"><b><i>Personal 100% capacitados para brindar el mejor servicio</i></b>
        </h3>
    </div>

    <div class="container text-center"> <!-- Contenedor centrado -->
        <div class="card" style="width: 15rem; display: inline-block; margin: 10px;">
            <img src="img/secretario.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cristopher Spanky Elias Zenteno</h5>
            </div>
        </div>

        <div class="card" style="width: 15rem; display: inline-block; margin: 10px;">
            <img src="img/secretaria.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sherlith Araceli Elias Konno</h5>
            </div>
        </div>
    </div>


    <br>
@endsection
