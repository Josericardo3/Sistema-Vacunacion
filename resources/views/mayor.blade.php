<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="{{ asset('css/iniciosesion.css') }}" rel="stylesheet">
  </head>
  <body>
<div class="container">  
    <form id="contact" action="" method="post">
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
</body>
</html>