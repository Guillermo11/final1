<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Servicios - Curso de Bootstrap 4!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap1.css') !!}">
<link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">


  </head>
  <body>

  <!-- menú de navegación -->
  <nav class="navbar navbar-inverse  navbar-toggleable-sm sticky-top" style="background-color: #235278;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="{!! asset('images/icon.jpg') !!}" width="30" height="30" class="d-inline-block align-top" alt="Logo Bootstrap">
  VUME</a>
    <div class="collapse navbar-collapse">
      <a class="navbar-brand" href="#">
      Ventanilla Unica Municipal De Empleo</a>

    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="navbar-nav mr-auto ml-auto text-center">

    </div>
    <div class="d-flex flex-row ">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{!! url('servicios') !!}">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Informacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contacto</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

        </li>
        <li class="nav-item active">

        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- fin menú de navegación -->
  <!--  card -->
  <!-- Page Content -->
  <div class="container">


     <main class="py-4">
         @yield('content')
     </main>
  </div>
  <!-- /.container -->
  <!-- fin Cards -->


  <!-- Formulario 1 -->


  <!-- fin Formulario 1 -->

  <!-- Footer -->

  <!-- Fin Footer -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{!! asset('js/jquery-3.1.1.slim.min.js') !!}" ></script>
    <script src="{!! asset('js/tether.min') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>
