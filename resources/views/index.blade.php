@extends('nav.navMenu')
@section('content')
<!DOCTYPE html>
<!-- Page Heading -->
<div class="d-flex flex-row ">
  <ul class="navbar-nav mr-auto">

    <li class="nav-item">
      <a class="nav-link active" href="{!! url('servicios') !!}">Informacion</a>
    </li>
    </ul>
</div>
<h1 class="my-4">

</h1>
  <!-- Project One -->
  <div class="row">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{!! asset('images/xela1.jpg') !!}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Project One</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
      <!-- Modal 1 -->
      <!-- Button trigger modal -->
      <a href="{!! asset('/usuario/create') !!}">
        <button type="button" class="btn btn-sm btn-info"><i class="fa fa-users fa-fw"></i> + USUARIO</button></div>
    </a>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Servicio 6</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis cupiditate est nesciunt fugiat eos voluptatem doloribus eius unde eligendi dolor minima odio dolore, autem eveniet rem non, ex obcaecati sit asperiores sequi expedita ipsa! Inventore corporis ipsum, expedita consequatur, similique, odio nisi facilis itaque alias saepe aliquid voluptate obcaecati ad blanditiis iure. Ex porro, quis, nemo maxime illo ipsum officia illum quam pariatur corporis ut, hic accusantium? Repellendus deserunt dicta pariatur ex repudiandae odit provident illo temporibus molestias, eveniet nesciunt nobis voluptate labore sit in veritatis, ducimus voluptates id obcaecati mollitia delectus quasi. Reiciendis laudantium facere inventore voluptatem consequatur.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <!-- Fin Modal 1 -->
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Two -->
  <div class="row">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="images/xela1.jpg" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Project One</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
      <!-- Modal 1 -->
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" href='{!! url('usuario/formulario') !!}'>
          Más Información
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Servicio 6</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis cupiditate est nesciunt fugiat eos voluptatem doloribus eius unde eligendi dolor minima odio dolore, autem eveniet rem non, ex obcaecati sit asperiores sequi expedita ipsa! Inventore corporis ipsum, expedita consequatur, similique, odio nisi facilis itaque alias saepe aliquid voluptate obcaecati ad blanditiis iure. Ex porro, quis, nemo maxime illo ipsum officia illum quam pariatur corporis ut, hic accusantium? Repellendus deserunt dicta pariatur ex repudiandae odit provident illo temporibus molestias, eveniet nesciunt nobis voluptate labore sit in veritatis, ducimus voluptates id obcaecati mollitia delectus quasi. Reiciendis laudantium facere inventore voluptatem consequatur.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <!-- Fin Modal 1 -->
    </div>
  </div>
  <!-- /.row -->


  <hr>

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
@stop
