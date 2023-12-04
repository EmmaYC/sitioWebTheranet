<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosFamiliarController extends Controller
{
    public function __invoke()
    {
        return view('serviciosFamiliar');
    }
}
