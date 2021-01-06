<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="<?php echo e(asset('css/registro.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <button class="btn btn-info m-3"><a id="enlace" href="<?php echo e(url("/")); ?>">Atrás</a></button>

    <div class="login-box">
      <h1>Registro</h1>
      <div class="object"></div>
      <form>
        <!-- Nombre completo -->
        <label for="name">Nombre Completo</label>
        <input type="text" placeholder="Ingrese su nombre completo">
        <!-- N° de dni -->
        <label for="number">Número de DNI</label>
        <input type="text" placeholder="Ingrese su número de DNI">
        <!-- Lugar de nacimiento -->
        <label for="location">Lugar de nacimiento</label>
        <input type="text" placeholder="Ingrese el lugar de nacimiento">
        <!-- Fecha de nacimiento -->
        <label for="Date">Fecha de nacimiento</label>
        <input type="date" placeholder="Ingrese su fecha de nacimiento">
        <input type="submit" value="Registrarse">
        <br>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\sistemavacunacion\resources\views/registro.blade.php ENDPATH**/ ?>