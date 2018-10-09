@extends('nav.navMenu')
@section('content')
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
      <body class="content">
  	<div class="row">
  		<div class="container col-md-3" >
  				<h2 class="h2 pb-4">Bienvenido</h2>
  				<form  class="formulario " action="" method="POST" role="form">
  					<div class="form-group row ">
  						<input type="text" class="form-control " id="" placeholder="Nombre de usuario" autocomplete="off">
  					</div>
  					<div class="form-group row">
  						<input type="password" class="form-control " id="" placeholder="Contraseña" autocomplete="off">
  					</div>
  					<div class="form-group">
  						<button type="submit" class="btn btn-danger btn-md">Ingresar</button>

  					</div>
  				</form>
  		</div>
  		<div class="logo  col-md-7">
  				<img  class="img-fluid mx-auto rounded-circle" src="images/logo1.jpg" alt="">
  		</div>
  	</div>
  </body>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@stop
