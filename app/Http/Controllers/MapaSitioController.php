<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaSitioController extends Controller
{
    public function __invoke()
    {
        return view('mapaSitio');
    }
}
