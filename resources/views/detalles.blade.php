<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha cita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/detalles.css') }}" rel="stylesheet">
</head>
<body>

    <div class="row">

        <div class="col-md-8 col-12" style="height: 97vh;">
            <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Menu</a></button><h3 class="text-center mb-3" style="margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 40px;">Detalles de la cita</h3>

                
                


            <div class="row">
                <div class="col-md-2 col-2"></div>
                <div class="col-md-8 col-8">
<<<<<<< HEAD
                    <h5 class="my-3">Hospital:</h5>
                    <h6 id="hospital">{{ $consultaUsuario2->nombre }}</h6>
                    <p>____________________________________________________________________</p>

                    <div class="row">
                        <div class="col-6">
                            <h5 class="my-3">Departamento:</h5>
                        <h6 id="hospital">{{ $consultaUsuario2->departamento }}</h6>
                        <p>________________________________</p>

                        </div>
                        <div class="col-6">
                            <h5 class="my-3">Distrito:</h5>
                            <h6 id="hospital">{{ $consultaUsuario2->distrito }}</h6>
                            <p>________________________________</p>
                        </div>
                    </div>
                    
                    <h5 class="my-4">Doctor:</h5>
                    <h6 id="doctor">{{ $consultaUsuario2->Doctor }}</h6>
                    <!--{{-- <h6 id="doctor">{{ $variable }}</h6> --}}-->
                    <p>____________________________________________________________________</p>
                    
                    <h6 class="text-center">Fecha de cita:</h6>
                    <h6 class="text-center">{{ $consultaUsuario2->fechaCita }}</h6>
=======
                        <h5 class="my-3">Hospital:</h5>
                        <h6 id="hospital">{{ $nombre }}</h6>
                        <p>____________________________________________________________________</p>

                        <h5 class="my-3">Departamento:</h5>
                        <h6 id="hospital">{{ $departamento }}</h6>
                        <p>____________________________________________________________________</p>

                        <h5 class="my-3">Distrito:</h5>
                        <h6 id="hospital">{{ $distrito }}</h6>
                        <p>____________________________________________________________________</p>
                        
                        <h5 class="my-4">Doctor:</h5>
                        <h6 id="doctor">{{ $doctor }}</h6>
                        <!--{{-- <h6 id="doctor">{{ $variable }}</h6> --}}-->
                        <p>____________________________________________________________________</p>
                        
                        <h6 class="text-center">Fecha de cita:</h6>
                        <h6 class="text-center">{{ $fecha }}</h6>
>>>>>>> a961b20f1547f8df63f2f9c1e0df4914305a9182
                        
                        <div class="text-center mt-4">
                            <a href="{{ url("/") }}" class="btn btn-success">Aceptar</a>
                            <a href="#" class="btn btn-danger">Cancelar</a>
                        </div>
                </div>
                <div class="col-md-2 col-2"></div>
            </div>
        </div>

        <div class="col-md-4 col-4 derecha" style="background:#50c2ff !important; display: flex; align-items:center; height:112vh;">
            <img src="img/user.png" style="height: 180px; width: 180px;" class="img-fluid mx-auto d-block" alt="">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>