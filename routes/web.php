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


Route::get('/login', [RegistroUsuario::class,'LoginUsuario'])->name('login');

Route::get('/inicioR', [RegistroUsuarioController::class,'vistaIngreso']);

// Auth::routes();

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::post('/', [RegistroUsuarioController::class,'registroUsuarioR'])->name('registro.usuario');

// Route::post('/', function (Request $request) {
//     $request->validate([
//       'nombre' => 'required|min:8',
//       'dni' => 'required',
//     ]);

//     $nombre = $request->nombre;
//         $condicion = $request->condicion;
//         $selectDepartamento = $request->selectDepartamento;
//         $selectProvincia = $request->selectProvincia;
//         $dni = $request->dni;
//         $fechaNac = $request->fechaNac;

//         // dd($request->nombre);

//         return view('inicio_reg');


//     // El resto del código va aquí
// })->name('registro.usuario');


// Route::get('/inicioR', function () {
//     return view('inicio_reg');
// });

Route::get('/usuariosMayores', function () {
    return view('mayor');
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

