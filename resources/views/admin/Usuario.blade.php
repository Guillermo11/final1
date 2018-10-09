@extends('nav.navAdmin')
@section('content')
  <div class="container">
      <div class="row">
               <!--col-md-12-->
            <div class="col-md-12">
                <div class="card  mt-2">
                  <div class="card-header">Register Nuevo Administrador</div>
                  <div class="card-body">
              {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST','class'=>'popup-form','data-toggle'=>'validator']) !!}
                       @csrf
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Nombres</label>
                        {!! Form::text("Nombres",null, ['class'=>'form-control','placeholder'=>'Nombres*','required','autofocus']) !!}
                      </div>

                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Apellidos</label>
                        {!! Form::text('Apellidos',null, ['class'=>'form-control','placeholder'=>'Apellidos*','required']) !!}
                        </div><!-- end form-group -->

                        <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Direccion</label>
                        {!! Form::text('Direccion',null, ['class'=>'form-control','placeholder'=>'Direccion','required']) !!}
                          </div><!-- end form-group -->

                          <div class="form-group col-sm-6">
                            <label  for="exampleSelect1">Telefono</label>
                            {!! Form::text("Telefono",null, ['class'=>'form-control','placeholder'=>'Telefono','required']) !!}
                          </div>

                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Usuario</label>
                        {!! Form::text("Usuario",null, ['class'=>'form-control','placeholder'=>'Usuario*','required','autofocus']) !!}
                      </div>

                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Correo</label>
                        {!! Form::email('Email',null, ['class'=>'form-control','placeholder'=>'Tu E-mail*','pattern'=>'.*@\w{2,}\.\w{2,}','required']) !!}
                        </div><!-- end form-group -->

                        <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Contraseña</label>
                        {!! Form::password('Password', ['class'=>'form-control','placeholder'=>'password','required']) !!}
                          </div><!-- end form-group -->

                       <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Cargo</label>
                        <select id="inputState" name="Cargo" class="form-control">
                       <option value="">Seleccione</option>
                       @foreach ($roles as $roles)
                     <option value="{{ $roles['id'] }}">{{ $roles['nombre'] }}</option>
                       @endforeach
                        </select>
                        </div><!-- end form-group -->

                      <div class="form-group last col-sm-1">
                    {!! Form::submit('Guardar',['class'=>'btn btn-outline-primary mr-2']) !!}
                      </div><!-- end form-group -->
                      <div class="form-group last col-sm-6">
                        <a  type="button" class="btn btn-outline-danger" href="{!! asset('/admin') !!}"> Cancelar
                              </a>

                        </div><!-- end form-group -->
                      <div class="clearfix"></div>
                    </div><!-- end row -->
                    {!! Form::close() !!}
                  </div>
                </div>
                    <!-- FIN col-md-12-->
            </div>
          </div>
          <!-- /.row -->
    </div>

@stop
