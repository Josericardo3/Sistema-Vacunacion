{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mayores de 60 años</title>
    <link href="{{ asset('css/consulta.css') }}" rel="stylesheet">
  </head>
  <body>
<<<<<<< HEAD
  <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/inicioR") }}">Atrás</a></button>
<div class="container">  
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <form id="contact" action="{{ route('personal.medico') }}" method="post">
          <h3>Área de Salud</h3>
          <br>
          <fieldset>
            <input placeholder="CÓDIGO" type="text" tabindex="1" required autofocus>
          </fieldset>
         
          
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Ingresar</button>
          </fieldset>
        </form>
      </div>
      <div class="col-4"></div>
    </div>
=======

    <div class="login-box">
      <h1>Mayores de 60 años</h1>
      <div class="object"></div>
     
      <form>    
    <div class="container">  
      <br>
      <!-- N° de dni -->
      <label for="number">Número de DNI</label>
      <input type="text" placeholder="Ingrese su número de DNI">
      <a href="detalles">
        <input type="button" value="Ingresar">
      </a>
      
    </form>
>>>>>>> a961b20f1547f8df63f2f9c1e0df4914305a9182
   
    
  </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Area de Salud</title>
    <link href="{{ asset('css/iniciosesion2.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="login-box">
      <h1>Area de salud</h1>
      <div class="object"></div>
     
      <form method="POST" action="{{ route('personal.medico') }}">    
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