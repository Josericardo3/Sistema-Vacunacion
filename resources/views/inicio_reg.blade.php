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
</head>
<body>
 
    <div class="login-box">
      <h1>Iiniciar sesión</h1>
      <div class="object"></div>
     
        <form>
          <a href="areaSalud">
            <input type="button" formaction="area_sal.html" value="Area de Salud">
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

</html>