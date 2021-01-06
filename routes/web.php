<?php

use Illuminate\Support\Facades\Route;

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

