<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link href="{{ asset('css/preguntas.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">         

    <title>Hello, world!</title>
  </head>
  <body>
      <!--NAV-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <h3>SISTEMA DE VACUNACIÓN</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline"></ion-icon>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{ url("/") }}" id="inicio">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url("/preguntas") }}" id="preguntas">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
              <a href="{{ url("/registro") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Registrarse</a>
            </li>
            
          </ul>
        </div>
        </div>
    </nav>
    <div class="row">

      <div class="col-md-8 col-12">
        <br><br><br>
          <h1 class="text-left my-3" style="padding-left: 150px;">Preguntas frecuentes</h1>

          <div class="row">
              <div class="col-md-2 col-2"></div>
              <div class="col-md-8 col-8">
                      <h2>¿Cómo saber si he sido elegido para vacunarme?</h2>
                      <p>Puedes ingresar a nuestro sitio web, primero registrarse, luego iniciar sesión para ver si haz sido elegido o no.</p>

                      <h2>¿Quienes seran los beneficiados con la vacuna?</h2>
                      <p>Los principales beneficiados seran el personal de salud, el personal de las fuerzas armadas y los adultos mayores a 60 años</p>

                      <h2>¿Cuando comenzaran a vacunar?</h2>
                      <p>Puedes ver tu fecha de vacunación consultando en nuestro sitio web, que sera en el mes de enero.</p>

              </div>
              <div class="col-md-2 col-2"></div>
          </div>
      </div>

      <div class="col-md-4 col-4 derecha" style="sdisplay: flex; align-items:center; height:97vh;">
          <img src="img/preguntas.png" style="height: 520px; width: 260px; padding-top: 150px;" class="img-fluid mx-auto d-block" alt="">
      </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Interacción Hombre Computadora - Grupo 5</small>
    </div>
  </footer>
    
    <!--Iconos-->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>