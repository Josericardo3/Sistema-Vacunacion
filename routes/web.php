<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroUsuario;
use App\Http\Controllers\RegistroUsuarioController;


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

Route::get('/noRegistrado', function () {
    return view('noRegistrado');
});

Route::get('/login', [RegistroUsuario::class,'LoginUsuario'])->name('login');

Route::get('/inicioR', [RegistroUsuarioController::class,'vistaIngreso']);

// Auth::routes();

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::post('/Menu', [RegistroUsuarioController::class,'registroUsuarioR'])->name('registro.usuario');

Route::post('/a', [RegistroUsuarioController::class,'registroUsuarioRR'])->name('registro.usuario2');

Route::post('/', [RegistroUsuarioController::class,'mayorEdad'])->name('mayor.edad');

Route::post('/k', [RegistroUsuarioController::class,'personalMedico'])->name('personal.medico');

Route::post('/j', [RegistroUsuarioController::class,'fuerzasArmadas'])->name('fuerzas.armadas');



Route::get('/usuariosMayores', function () {
    return view('mayor');
});

Route::get('/categoria', function () {
    return view('inicio_reg');
});


Route::get('/usuariosFuerzas', function () {
    return view('fuer_arm');
});

Route::get('/areaSalud', function () {
    return view('area_sal');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});