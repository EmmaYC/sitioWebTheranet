<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MapaSitioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\ServiciosEmpresasController;
use App\Http\Controllers\ServiciosFamiliarController;
use App\Http\Controllers\ServiciosGeneralesController;
use App\Http\Controllers\TvTheranetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexController::class);

Route::get('serviciosGenerales', ServiciosGeneralesController::class);

Route::get('serviciosEmpresas', ServiciosEmpresasController::class);

Route::get('serviciosFamiliar', ServiciosFamiliarController::class);

Route::get('mapaSitio', MapaSitioController::class);

Route::get('tvTheranet', TvTheranetController::class);

Route::get('nosotros', NosotrosController::class);

Route::get('contactanos', ContactanosController::class);

Route::get('reclamos', ReclamosController::class);
