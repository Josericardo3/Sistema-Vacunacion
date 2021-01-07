<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">         

    <title>Sistema de vacunacion</title>
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
              <a class="nav-link"  href="{{ url("/") }}" id="inicio">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url("/preguntas") }}" id="preguntas">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
              <a  href="{{ url("/registro") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Registrarse</a>
            </li>
            
          </ul>
        </div>
        </div>
    </nav>
    <section id="portada">
        <div class="container-fluid">
            <div class="content-center topmargin-lg">
            <br><br>
            <h1 class="text-dark">Sistema de vacunación</h1>
            <p class="text-dark">Sistema de vacunación covid-19 para el mes de enero 2021, comprueba tu cita registrandote en nuestro sistema.</p>
            <br>
            <a class="btn btn-primary p-2"  href="{{ url("/inicioR") }}" role="button">Consulte su cita</a>
            </div>
        </div>
    </section>
    <section id="beneficiados">
        <div class="container-fluid">
            <div class="content-center">
            <h2>Principales <b>beneficiados</b> con nuestro Sistema de vacunación</h2>
            <p>Se tendrá como principales a ser vacunados según el siguiente orden: el personal del área de salud, personal de las fuerzas armadas y las personas mayores de 60 años</p>
      
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="beneficiados-container">
                        <img src="img/anci.png" class="img-fluid" alt="beneficiados">
                        <div class="beneficiados-details">
                            <p>Personas mayores de 60 años.</p>
                        </div>
                    </div>
                </div>
         
          
                <div class="col-md-4">
                    <div class="beneficiados-container">
                        <img src="img/doc.png" class="img-fluid" alt="beneficiados 2">
                        <div class="beneficiados-details">
                            <p>Personas del área de salud.</p>
                        </div>
                    </div>
                </div>
          
          
                <div class="col-md-4">
                    <div class="beneficiados-container">
                        <img src="img/poli.png" class="img-fluid" alt="beneficiados 3">
                        <div class="beneficiados-details">
                            <p>Personas de las fuerzas armadas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; Interacción Hombre Computadora - Grupo 5</small>
      </div>
    </footer>
    <!--CERRARNAV-->
    <!--Iconos-->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>