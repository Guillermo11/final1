@extends('nav.navAdmin')
@section('content')
  <div class="container">
  <div class="row">
           <!--col-md-12-->
        <div class="col-md-12">
            <div class="card  mt-2">
           <div class="card-header">
              	<div class="table-heading">
                   Administrador Registrados
              <a href="{!! asset('/admin/create') !!}">
                <button type="button" class="btn btn-sm btn-info"><i class="fa fa-users fa-fw"></i> + USUARIO</button></div>
            </a>

             </div>
              <div class="card-body">
                <table class="table table-striped ">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">Direccion</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Email</th>
                      <th scope="col">dunciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Users as $users)
                      <tr>
                    <td class="foto"><img src="{!! asset('images/user1.png') !!}" width="30" height="30" class="img-fluid rounded-circle" alt=""></td>
                    <td>{{$users->nombres }}</td>
                    <td>{{$users->apellidos }}</td>
                    <td>{{$users->direccion}}</td>
                    <td>{{$users->telefono }}</td>
                      <td>{{$users->Correo }}</td>
                           </td>


                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
                <!-- FIN col-md-12-->
        </div>
      </div>
      <!-- /.row -->
</div>

  @stop
