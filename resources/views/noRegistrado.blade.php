
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/ico" href="{{ asset('img/ambulancia.ico') }}" />
  </head>
  <body>
      <button class="btn btn-info m-3"><a id="enlace" href="{{ url("/") }}">Atrás</a></button>

    
    <div class="login-box">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            DNI no encontrado ¿Deseas registrarte?
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
        </div>
      <h1>Registro</h1>

      <div class="object"></div>
      <form method="POST" enctype="multipart/form-data"
      action="{{ route('registro.usuario2') }}">
        {{ csrf_field() }}
        @csrf
        <!-- Nombre completo -->
        @error('nombre')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Asegúrate de escribir tu nombre completo
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @enderror
        <label for="name">Nombre Completo</label>
        
        <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese su nombre completo" required>
        <!-- N° de dni -->
        <div class="row">
          <div class="col-6">
            <label for="number">Número de DNI</label>
            @error('dni')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            DNI no válido
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @enderror
            <input type="text" name="dni" placeholder="Ingrese su número de DNI" value="{{ old('dni') }}"  required>
          </div>
          <div class="col-6">
            <label for="name" name="condicion">Condición</label>
            <select class="form-control" name="condicion" required="">
              <option value="1">Fuerzas armadas</option>
              <option value="2">Adulto mayor</option>
              <option value="3">Personal médico</option>
            </select></div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <label for="name">Departamento</label>
            <select name="selectDepartamento" onchange="cambia()" value="{{ old('selectDepartamento') }}" class="form-control" required=""
            data-parsley-error-message="Escoja su ubicación">
            <option value="">Seleccione</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Ancash">Ancash</option>
            <option value="Apurímac">Apurímac</option>
            <option value="Arequipa">Arequipa</option>
            <option value="Ayacucho">Ayacucho</option>
            <option value="Cajamarca">Cajamarca</option>
            <option value="Callao">Callao</option>
            <option value="Cuzco">Cuzco </option>
            <option value="Huancavelica">Huancavelica</option>
            <option value="Huánuco">Huánuco</option>
            <option value="Ica">Ica</option>
            <option value="Junín">Junín</option>
            <option value="La_Libertad">La Libertad</option>
            <option value="Lambayeque">Lambayeque</option>
            <option value="Lima">Lima</option>
            <option value="Loreto">Loreto</option>
            <option value="Madre_de_Dios">Madre de Dios</option>
            <option value="Moquegua">Moquegua</option>
            <option value="Pasco">Pasco</option>
            <option value="Piura">Piura</option>
            <option value="Puno">Puno</option>
            <option value="San_Martín">San Martín</option>
            <option value="Tacna">Tacna</option>
            <option value="Tumbes">Tumbes</option>
            <option value="Ucayali">Ucayali</option>
          </select></div>
          <div class="col-6">
            <label for="name">Distrito</label>
            <select class="form-control" name="selectProvincia" value="{{ old('selectProvincia') }}" onchange="cambiaDistrito()" required="">
              <option>Seleccione la Provincia</option>
            </select>
          </div>
        </div>
            <label class="text-center" for="Date">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" placeholder="" required>
            <!-- Fecha de nacimiento -->
            <div class="row">
              <div class="col-4"></div>
              <div class="col-4"><input class="btn btn-primary" type="submit" value="Registrarse"></div>
              <div class="col-4"></div>
            </div>
        <br>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/producto.js') }}"></script>
  </body>
</html>