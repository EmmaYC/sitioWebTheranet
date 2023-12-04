@extends('layouts.plantilla')

@section('title', 'Theranet - Mapa de Sitio')

@section('content')


    <div class="ribbon1">
        <div class="container w-100 pl-10 pr-10 rounded-lg">
            <div class="col-sm p-3 text-dark text-center ">
                <h4 class="h4 text-shadow"><b><i>MAPA DE SITIO</i></b>
                </h4>
            </div>
        </div>
    </div>

    <div>
        <br><br>
        <p class="container-mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.648430963769!2d-79.64214922505283!3d-6.812546793185021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cdb5270411d07%3A0x86168d4ec308305b!2sJuan%20Velasco%20Alvarado%203%2C%20Saltur%2014710!5e0!3m2!1ses-419!2spe!4v1699235206479!5m2!1ses-419!2spe"
                width="80%" height="650" style="border:0; margin-left: auto;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>



    </div><br><br>
    <br>
@endsection
