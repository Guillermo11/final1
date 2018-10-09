@extends('nav.navAdmin')
@section('content')
  <div class="container">
        <div class="row">
                 <!--col-md-12-->
              <div class="col-md-12">
                  <div class="card  mt-2">
                    <div class="card-header">Register Nuevo Administrador</div>
                    <div class="card-body">
                      {!! Form::model($user,['action' => ['AdminController@update',$user->id],'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}
           @csrf
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Nombres</label>
                          {!! Form::text("nombres",null, ['class'=>'form-control','placeholder'=>'Nombres*','required','autofocus']) !!}
                        </div>

                        <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Apellidos</label>
                          {!! Form::text('apellidos',null, ['class'=>'form-control','placeholder'=>'Apellidos*','required']) !!}
                          </div><!-- end form-group -->

                          <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Direccion</label>
                          {!! Form::text('direccion',null, ['class'=>'form-control','placeholder'=>'Direccion','required']) !!}
                            </div><!-- end form-group -->

                            <div class="form-group col-sm-6">
                              <label  for="exampleSelect1">Telefono</label>
                              {!! Form::text("telefono",null, ['class'=>'form-control','placeholder'=>'Telefono','required']) !!}
                            </div>

                        <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Correo</label>
                          {!! Form::email('Correo',null, ['class'=>'form-control','placeholder'=>'Tu E-mail*','pattern'=>'.*@\w{2,}\.\w{2,}','required']) !!}
                          </div><!-- end form-group -->
                         <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Cargo</label>
                          <select id="inputState" name="cargo" class="form-control">
                         <option value="{{ $user['id'] }}">{{ $user['cargo'] }}</option>
                         <option value="2">Administrador</option>
                         <option value="3">Invitado</option>

                          </select>
                          </div><!-- end form-group -->

                        <div class="form-group last col-sm-12">
                      {!! Form::submit('Guardar',['class'=>'btn btn-outline-primary mr-2']) !!}
                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
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
