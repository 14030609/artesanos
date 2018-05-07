@extends('welcome')
@section('add')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['route' => 'Producto.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'id_Categoria') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Nombre', 'Nombre') !!}
                    {!! Form::textarea('Nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('precioVenta', 'precioVenta') !!}
                    {!! Form::date('precioVenta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('precioCompra', 'precioCompra') !!}
                    {!! Form::date('precioCompra', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop