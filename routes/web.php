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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/consultaCodigo', function () {
    return view('consultaCod');
});

Route::get('/consultaDni', function () {
    return view('consultaDni');
});

Route::get('/detallesCita', function () {
    return view('detalles');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/preguntas', function () {
    return view('preguntas');
});

