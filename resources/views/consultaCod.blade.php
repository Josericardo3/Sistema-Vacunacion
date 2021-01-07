<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta - codigo</title>
    <link href="{{ asset('css/consulta.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/ambulancia.ico') }}" />
  </head>
  <body>

    <div class="login-box">
      <h1>Consulta - Código</h1>
      <div class="object"></div>
      <form class= "fconsult">
        <!-- Codigo -->
        <label for="name">Código de atención</label>
        <input type="text" placeholder="Ingrese su código de atención">
        <!-- Fecha -->
        <label for="date">Fecha de solicitud</label>
        <input type="date" placeholder="Ingrese la fecha de su solicitud">
        <br>
        <input type="submit" value="Consultar">
        <br>
        <a href="consultaCodigo.html">Consultar por N° DNI</a>
      </form>
    </div>
  </body>
</html>