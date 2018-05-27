@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Envío</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Envios.store', 'method' => 'post', 'validate']) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Usuario') !!}
                    {!! Form::text('id_Usuario', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('full_name', 'Persona que recibe') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Estado') !!}
                    {!! Form::text('id_Estado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Ciudad') !!}
                    {!! Form::text('id_Ciudad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Teléfono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Dirección') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop