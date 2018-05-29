@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="form-group">
                    {!! Form::label('full_name', 'Producto') !!}
                    {!! Form::select('id_Producto',$pro,null,['id_Usuario','nombre_Usuario', 'class' =>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Fecha de Venta') !!}
                    {!! Form::date('Fecha_Venta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('full_name', 'Método de Pago') !!}
                    {!! Form::select('id_MetodosPago',$metodosPago,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Cupón de Descuento') !!}
                    {!! Form::select('id_CuponDescuento',$cuponDescuento,null,['id_CuponDescuento','nombre', 'class' =>'form-control']) !!}
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

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop