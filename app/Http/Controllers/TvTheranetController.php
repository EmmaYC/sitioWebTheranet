<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvTheranetController extends Controller
{
    public function __invoke()
    {
        return view('tvTheranet');
    }
}
