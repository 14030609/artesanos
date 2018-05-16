@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::model($usuarios,array('route' =>['Usuario.update',$usuarios->id_Usuario],'method'=>'PUT')) !!}

                {!! Form::hidden('id', $usuarios->id_Usuario) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'nombre_Usuario') !!}
                    {!! Form::text('nombre_Usuario', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('full_name', 'pass') !!}
                    {!! Form::text('pass', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'id_Rol') !!}
                    {!! Form::text('id_Rol', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop