@extends('nav.navAdmin')
@section('content')
  <div class="container">
      <div class="row">
               <!--col-md-12-->
            <div class="col-md-12">
                <div class="card  mt-2">
                  <div class="card-header justify-content-center">Administrador de publicidad</div>
                  <div class="card-body">
                    	{!!Form::open(['action'=>'EventoController@store', 'method'=>'POST'])!!}

                       @csrf
                    <div class="row">

                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">Puesto</label>
                        {!! Form::text('titulo',null, ['class'=>'form-control','placeholder'=>'Apellidos*','required']) !!}
                        </div><!-- end form-group -->

                        <div class="form-group col-sm-12">
                        <label  for="exampleSelect1">Informacion</label>

                      <textarea name ="informacion" class="textarea" placeholder="Message"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div><!-- end form-group -->

                          <div class="form-group col-sm-6">
                            <label  for="exampleSelect1">fecha de publicacion</label>
                            {!! Form::date('fechapublic', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','onblur'=>'if (this.value == )']) !!}
                          </div>

                      <div class="form-group col-sm-6">
                        <label  for="exampleSelect1">fecha limite</label>
                        {!! Form::date('fechafinal', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','onblur'=>'if (this.value == )']) !!}
                        </div>

                        <div class="form-group col-sm-6">
                          <label  for="exampleSelect1">Puesto</label>
                          {!! Form::text('avatar',null, ['class'=>'form-control','placeholder'=>'Apellidos*','required']) !!}
                          </div><!-- end form-group -->
                            <div class="form-group col-sm-6">

                                </div>

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
