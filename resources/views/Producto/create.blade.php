@extends('welcome')
@section('add')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Producto</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Producto.store', 'method' => 'post', 'validate']) !!}
                <div class="form-group">
                    {!! Form::label('id_Category', 'Categoría') !!}

                    <select class="form-control" name="id_Categoria", id="id_Categoria">

                        @foreach($category as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                    </select>

                </div>
                <div class="form-group">
                    {!! Form::label('Nombre', 'Nombre') !!}
                    {!! Form::text('Nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('precioVenta', 'Precio de venta') !!}
                    {!! Form::text('precioVenta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('precioCompra', 'Precio de compra') !!}
                    {!! Form::text('precioCompra', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop