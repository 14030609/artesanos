@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reportes </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Venta.store', 'method' => 'post', 'validate']) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Número de clientes') !!}
                    {!! Form::text('id_Usuario', $clientes, ['class' => 'form-control' , 'required' => 'required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Número de ordenes') !!}
                    {!! Form::text('id_Venta', $ordenes, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('full_name', 'Número de ventas') !!}
                    {!! Form::text('id_Venta', $ventas, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
@stop