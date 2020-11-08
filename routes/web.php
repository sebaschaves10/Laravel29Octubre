<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ruta /
Route::get('/', function () {
    return view("home");
});

Route::get('hotel/historia', function () {
    return view('hotel.historia');;
});

Route::get('hotel/misionvision', function () {
    return view('hotel.misionvision');;
});

Route::get('hotel/ubicacion', function () {
    return view('hotel.ubicacion');;
});

Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');;
});

Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id' => $id));;
});

Route::get('reservas', function () {
    return view('reservas');;
});

Route::get('contacto', function () {
    return view('contacto');;
});

//Ruta Catalogo/Edit => Parametros


