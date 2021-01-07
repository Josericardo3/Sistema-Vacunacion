{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mayores de 60 años</title>
    <link href="{{ asset('css/consulta.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/ambulancia.ico') }}" />
  </head>
  <body>
  <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/inicioR") }}">Atrás</a></button>
<div class="container">  
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <form id="contact" method="POST" action="{{ route('mayor.edad') }}">
        <h3>Mayores de 60 años</h3>
        <br>
        <fieldset>
          <input placeholder="DNI" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder="Fecha de Emisión del DNI" type="email" tabindex="2" required>
        </fieldset>
        
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Ingresar</button>
        </fieldset>
      </form>
    </div>
    <div class="col-4"></div>
  </div>
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
   
  </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mayores de 60 años</title>
    <link href="{{ asset('css/iniciosesion2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>

    <div class="login-box">


      <h1>Mayores de 60 años</h1>
      <div class="object"></div>
    
          <form method="POST" action="{{ route('mayor.edad') }}">   
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="{{ asset('js/producto.js') }}"></script>
</body>
</html>