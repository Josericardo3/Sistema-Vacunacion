<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fuerzas Armadas</title>
    <link href="{{ asset('css/iniciosesion2.css') }}" rel="stylesheet">
  </head>
  <body>

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