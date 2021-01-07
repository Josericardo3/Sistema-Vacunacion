{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="{{ asset('css/iniciosesion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detalles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    @if($registro==1)
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/registro") }}">Atrás</a></button>
  @elseif($registro==0)
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>
  @endif
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
          @if($registro)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro Exitoso
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div id="contact">
                <div style="text-align: center;">
                  <h3>Iniciar Sesión</h3>
                  <br>
            </div>
            <fieldset>
            <div style="text-align: center;">
                                    <a  href="{{ url("/areaSalud") }}" target="_self" rel="noopener noreferrer">
                                    <button type="submit" id="contact-submit"class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#619a95;height:50px;weight:70px">Área de Salud </button>
                                    </a>
                                  </div>
                                    <br>
        
                          <div style="text-align: center;">
                              <a  href="{{ url("/usuariosFuerzas") }}" target="_self" rel="noopener noreferrer">
                              <button type="submit" id="contact-submit"class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#F5DEB3;height:50px;weight:70px">Fuerzas Armadas</button>
                            </a>
                            </div>
        
                            <br>
                      <div style="text-align: center;">
                    <a  href="{{ url("/usuariosMayores") }}" target="_self" rel="noopener noreferrer">
                  <button type="submit" id="contact input"  class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#DA70D6;height:50px;weight:70px">Mayores de 60 años</button>
                    </a>
                      </div>
            </fieldset>
        </div>
      <div class="col-3"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/producto.js') }}"></script>
  
</body>
</html> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link href="{{ asset('css/iniciosesion2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    @if($registro==1)
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/registro") }}">Atrás</a></button>
  @elseif($registro==0)
    <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>
  @endif

    <div class="login-box">
      @if($registro)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro Exitoso
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
      <h1>Iniciar sesión</h1>
      <div class="object"></div>
     
      <form>       
    
       
          <input href="{{ url("/areaSalud") }}" type="submit" value="Area de Salud">
        
          <br>
  
          <input  href="{{ url("/usuariosFuerzas") }}" type="submit" value="Fuerzas Armadas">
            
          <br>
           
          <input  href="{{ url("/usuariosMayores") }}" type="submit" value="Mayores de 60 años">
       
      </form> 
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="{{ asset('js/producto.js') }}"></script>
  </body>

</html>