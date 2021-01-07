<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>

  </head>
  <body>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--CSS-->
<link href="{{ asset('css/consulta.css') }}" rel="stylesheet">
<link href="{{ asset('css/detalles.css') }}" rel="stylesheet">
<link rel="icon" type="image/ico" href="{{ asset('img/ambulancia.ico') }}" />
</head>
<body>
  <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>
<div class="login-box">
      @if($registro)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro Exitoso
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
      <h1>Categoría</h1>
      <div class="object"></div>

        <form>       
          <input class="btn btn-primary" formaction="{{ url("/areaSalud") }}" type="submit" value="Area de Salud">
        
          <br>
  
          <input class="btn btn-primary" formaction="{{ url("/usuariosFuerzas") }}" type="submit" value="Fuerzas Armadas">
            
          <br>
           
          <input class="btn btn-primary" formaction="{{ url("/usuariosMayores") }}" type="submit" value="Mayores de 60 años">
       
      </form> 
      
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="{{ asset('js/producto.js') }}"></script>
  </body>

</html>

{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>

  </head>
  <body>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--CSS-->
<link href="{{ asset('css/consulta.css') }}" rel="stylesheet">
</head>
<body>
 
    <div class="login-box">
      <h1>Iiniciar sesión</h1>
      <div class="object"></div>
     
        <form>
          <a href="areaSalud">
            <input type="button" formaction="{{ url("/areaSalud") }}" value="Area de Salud">
          </a>
       </form>
          <br>
          <form>
            <a href="usuariosFuerzas">
              <input type="button" formaction="fuer_arm.html" value="Fuerzas Armadas">
            </a>
        </form> 
          <br>
          <form>
            <a href="usuariosMayores">
              <input type="button" formaction="mayor.html" value="Mayores de 60 años">
            </a> 
        </form>
      </div>
  </body>

</html> --}}