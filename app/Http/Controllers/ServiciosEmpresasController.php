<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosEmpresasController extends Controller
{
    public function __invoke()
    {
        return view('serviciosEmpresas');
    }
}
