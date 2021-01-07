<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroUsuario;

class RegistroUsuario extends Controller
{
    //
    public function registroUsuario(RegistroUsuario $request){

        $nombre = $request->nombre;
        $condicion = $request->condicion;
        $selectDepartamento = $request->selectDepartamento;
        $selectProvincia = $request->selectProvincia;
        $dni = $request->dni;
        $fechaNac = $request->fechaNac;

        dd($request->nombre);

        return view('/registro');
    }

    public function LoginUsuario(){
        return view('welcome');
    }

    public function vistaIngreso(){
        
        $registro = 0;

        return view('inicio_reg');
    }
}
