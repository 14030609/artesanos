@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Usuario</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Usuario.store', 'method' => 'post', 'validate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'Email') !!}
                    {!! Form::email('nombre_Usuario', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Contraseña') !!}
                    {!! Form::text('pass', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Rol') !!}

                    <select class="form-control" name="id_Rol", id="id_Rol">

                        @foreach($rol as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>

                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop