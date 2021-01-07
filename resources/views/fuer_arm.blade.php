<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="{{ asset('css/iniciosesion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detalles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/inicioR") }}">Atrás</a></button>

<div class="container">
    
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <form id="contact" action="" method="post">
          <h3>Fuerzas Armadas</h3>
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
  </div>
</body>
</html>