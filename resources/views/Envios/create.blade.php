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
                {!! Form::open(['route' => 'Envios.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'id_Ciudad') !!}
                    {!! Form::text('id_Ciudad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'id_Estado') !!}
                    {!! Form::text('id_Estado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'telefono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'direccion') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'id_Usuario') !!}
                    {!! Form::text('id_Usuario', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop