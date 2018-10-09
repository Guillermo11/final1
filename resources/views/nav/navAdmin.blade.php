<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="{!! asset('font-awesome/css/font-awesome.min.css') !!}">
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/sb-admin.css') !!}" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/bootstrap3.css') !!}">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark  static-top"style="background-color: #2980b1;">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
         <i class="fa fa-reorder "></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fa fa-users fa-fw"></i>
              <span class="badge badge-danger">9+</span>

          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fa fa-user-plus"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" >
        <li class="nav-item active">
          <a class="nav-link" href="{!! url('usuario') !!}">
          <i class="fa fa-list"></i>
            <span>Lisata de usuarios</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{!! url('publicaciones') !!}">
            <i class="fa  fa-image"></i>
          <span>Publicasiones</span>

          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Usuario.html">
            <i class="fa fa-users fa-fw"></i>
          <span>Dashboard</span>

          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-bar-chart-o "></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{!! url('admin') !!}">
        <i class="fa fa-laptop "></i>
            <span>Administrador</span></a>
        </li>
      </ul>



        <div class="container">

       @yield('content')


      </div>
      <!-- /.content-wrapper -->


    <!-- /#wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
      <!-- Custom scripts for all pages-->
    <script src="{!! asset('js/sb-admin.min.js') !!}"></script>



  </body>

</html>
