@extends('welcome')
@section('add')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['route' => 'Surte.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('id_Procducto', 'id del producto') !!}
                    {!! Form::text('id_Producto', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('id_Proveedor', 'id del proveedor') !!}
                    {!! Form::text('id_Proveedor', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::textarea('fecha', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Cantidad', 'Cantidad') !!}
                    {!! Form::textarea('cantidad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop