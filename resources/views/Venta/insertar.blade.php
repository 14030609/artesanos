@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Venta </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Venta/storeDetalleVenta', 'method' => 'post', 'validate']) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Producto') !!}
                    {!! Form::select('id_Producto',$producto,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Cantidad') !!}
                    {!! Form::text('cantidadProducto', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Subtotal') !!}
                    {!! Form::text('Subtotal', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'IVA') !!}
                    {!! Form::text('iva', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Total de Venta') !!}
                    {!! Form::text('TotalVenta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>



            </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
@stop