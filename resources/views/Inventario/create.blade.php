@extends('welcome')
@section('add')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['route' => 'Inventario.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'id de producto') !!}
                    {!! Form::text('id_Producto', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'id de categoria') !!}
                    {!! Form::text('id_Categoria', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Cantidad', 'Cantidad ') !!}
                    {!! Form::text('Cantidad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop