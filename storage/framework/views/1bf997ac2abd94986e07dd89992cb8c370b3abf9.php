<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta - Dni</title>
    <link href="<?php echo e(asset('css/consulta.css')); ?>" rel="stylesheet">
  </head>
  <body>

    <div class="login-box">
      <h1>Consulta - DNI</h1>
      <div class="object"></div>
      <form class= "fconsult">
        <!-- Número de dni -->
        <label for="dni">Número de DNI</label>
        <input type="text" placeholder="Ingrese su N° de DNI">
        <!-- Fecha de solicitud -->
        <label for="date">Fecha de solicitud</label>
        <input type="date" placeholder="Ingrese la fecha de su solicitud">
        <br>
        <input type="submit" value="Consultar">
        <br>
        <a href="consultaDni.html">Consultar por código</a>
      </form>
    </div>
  </body>
</html><?php /**PATH C:\xampp\htdocs\sistemavacunacion\resources\views/consultaDni.blade.php ENDPATH**/ ?>