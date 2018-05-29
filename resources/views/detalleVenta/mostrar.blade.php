@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Venta </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        @foreach( $detalle as $value){

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'detalleVenta.store', 'method' => 'post', 'validate']) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Producto') !!}
                    {!! Form::text('id_Producto',$value->id_Producto,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'id de venta') !!}
                    {!! Form::text('id_Venta',$value->id_Venta,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Cantidad') !!}
                    {!! Form::text('Cantidad',$value->Cantidad,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Total de Venta') !!}
                    {!! Form::text('Total',$value->Total,null,['id_MetodosPago','nombre', 'class' =>'form-control']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>

        }



    </div>
@stop