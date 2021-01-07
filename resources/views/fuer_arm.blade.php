<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fuerzas Armadas</title>

    <link href="{{ asset('css/iniciosesion2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>
    <div class="login-box">
      <h1>Fuerzas Armadas</h1>
      <div class="object"></div>
     
      <form method="POST" action="{{ route('fuerzas.armadas') }}">    
        {{ csrf_field() }}
            @csrf 
    <div class="container">  
      <br>
      <!-- N° de dni -->
      <label for="number">Número de DNI</label>
      <input type="text" name="dni" placeholder="Ingrese su número de DNI">
  
      <input type="submit" value="Consultar">
    </form>
   
    
  </div>
</body>
</html>