@extends('layouts.plantilla')

@section('title', 'Theranet - Contactanos')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>CONTÁCTANOS</i></b>
                </h4>
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>¡Escríbenos y nos pondremos en contacto contigo!</i></b></h4>
        <br>
    </div>

    <div class="contenedor-form">
        <form class="row g-3" id="formC" action="https://formsubmit.co/emmanuelcapricornio8@gmail.com" method="POST">
            <div class="col-md-6">
                <label for="name" class="form-label"><b>Nombres</b></label>
                <input type="text" name="Nombres" id="name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label"><b>Apellidos</b></label>
                <input type="text" name="Apellidos" id="last-name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" name="Email" id="email" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label"><b>Teléfono</b></label>
                <input type="text" name="Teléfono" id="phone" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="distrito" class="form-label"><b>Distrito</b></label>
                <input type="text" name="Distrito" id="distrito" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label"><b>Dirección</b></label>
                <input type="text" name="Dirección" id="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label"><b>Mensaje</b></label>
                <textarea type="text" name="Mensaje" id="message" class="form-control" rows="5"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" style="width: 250px" class="btn btn-primary">Enviar</button>
            </div>
            <input type="hidden" name="_next" value="http://127.0.0.1:8000/contactanos">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>

    <br>
    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>Comunícate con nosotros</i></b></h4>
        <br>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="cardPlanEmpresas" style="max-width: 300px; margin-left: 170px;">
                <div class="card-body text-center">
                    <br>
                    <h5 class="card-title-MBPS">Área de Ventas</h5>
                    <hr class="horizontal-line-MBPS">
                    <br>
                    <p class="txt-contacto"><img src="img/email.png" alt="Ícono">venta@theranet.pe</p>
                    <p class="txt-contacto"><img src="img/phone.png" alt="Ícono">Ventas: 979216404</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="cardPlanEmpresas">
                <div class="card-body text-center">
                    <br>
                    <h5 class="card-title-MBPS">Números Telefónios</h5>
                    <hr class="horizontal-line-MBPS">
                    <br>
                    <p class="txt-contacto"><img src="img/phone.png" alt="Ícono">Soporte de TI: 963557795</p>
                    <p class="txt-contacto"><img src="img/phone.png" alt="Ícono">Reclamos: 953619932</p>
                </div>
            </div>
        </div>
    </div>


    <br>
@endsection
