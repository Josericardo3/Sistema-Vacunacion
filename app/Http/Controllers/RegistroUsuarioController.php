<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroUsuario;
use App\Models\Usuario;
use App\Models\Hospital;

use App;

class RegistroUsuarioController extends Controller
{
    public function registroUsuarioR(RegistroUsuario $request){

        $nombre = $request->nombre;
        $condicion = $request->condicion;
        $selectDepartamento = $request->selectDepartamento;
        $selectProvincia = $request->selectProvincia;
        $dni = $request->dni;
        $fechaNac = $request->fechaNac;

        $usuarioNuevo = new App\Models\Usuario;

        $usuarioNuevo->nombre = $nombre;
        $usuarioNuevo->condicion = $condicion;
        $usuarioNuevo->departamento = $selectDepartamento;
        $usuarioNuevo->distrito = $selectProvincia;
        $usuarioNuevo->dni = $dni;
        $usuarioNuevo->fechaNac = $fechaNac;

        $usuarioNuevo -> save();

        $ultimoId = $usuarioNuevo->id;

        $registro = 1;

        if($request->condicion == "1"){
            $diaAleatorio = rand(2, 3);
        }elseif($request->condicion == "2"){
            $diaAleatorio = rand(1, 2);
        }else{
            $diaAleatorio = 1;
        }


        $cita = Hospital::where('departamento','=',$request->selectDepartamento)->first();

        $cd= date("Y-m-d");

        $mon_date=strtotime($cd."+ $diaAleatorio days"); 
        
        $final= date("Y-m-d",$mon_date ."\n");

        // dd($cd,$mon_date,$final);

        if ($ultimoId%2==0){

            $cita = Hospital::where('departamento','=',$request->selectDepartamento)->orderBy('id','DESC')->first();

            $cita->id_usuario = $ultimoId;

            $cita->fechaCita = $final;

            
        }else{
            $cita = Hospital::where('departamento','=',$request->selectDepartamento)->orderBy('id','ASC')->first();

            $cita->id_usuario = $ultimoId;

            $cita->fechaCita = $final;

        }

        

        $cita->save();

        // dd($cita);


        



        // dd($request->nombre);

        return view('inicio_reg')->with('registro',$registro);

    }

    public function vistaIngreso(){
        
        $registro = 0;

        return view('inicio_reg')->with('registro',$registro);
    }
}
