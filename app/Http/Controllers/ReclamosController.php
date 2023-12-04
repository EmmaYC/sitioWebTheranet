<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamosController extends Controller
{
    public function __invoke()
    {
        return view('reclamos');
    }
}
