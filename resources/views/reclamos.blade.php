@extends('layouts.plantilla')

@section('title', 'Theranet - Contactanos')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>HOJA DE RECLAMACIONES</i></b>
                </h4>
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm p-3 text-dark text-center ">
        <h4 class="h4 text-shadow"><b><i>Identificacion del consumidor</i></b></h4>
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
                <label for="tipo-documento" class="form-label"><b>Tipo de Documento</b></label>
                <select id="tipo-documento" name="Tipo de Documento" class="form-select">
                    <option selected>DNI</option>
                    <option>RUC</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="documento" class="form-label"><b>N° de Documento</b></label>
                <input type="text" name="documento" id="documento" class="form-control">
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
                <label for="message" class="form-label"><b>Descripción del reclamo</b></label>
                <textarea type="text" name="Mensaje" id="message" class="form-control" rows="5"></textarea>
            </div>

            <!--div class="mb-3"> -----Para seleccionar un archivo y subir
                        <label for="formFileMultiple" class="form-label">Selecciona un archivo</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </!--div-->

            <div class="col-12">
                <button type="submit" style="width: 250px" class="btn btn-primary">Enviar</button>
            </div>
            <input type="hidden" name="_next" value="http://127.0.0.1:8000/reclamos">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>

    <br> <br>
@endsection
