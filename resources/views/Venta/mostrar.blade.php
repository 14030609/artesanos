@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detalle de Venta </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        @foreach( $detalle as $value)

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                <table>
                <td>
                    <div class="form-group">
                        {!! Form::label('full_name', 'id del producto') !!}
                        {!! Form::text('id_Producto', $value->nombre, ['class' => 'form-control' , 'required' => 'required']) !!}
                    </div>

                </td>
                    <td>

                        <div class="form-group">
                            {!! Form::label('full_name', 'id de venta') !!}
                            {!! Form::text('id_Venta', $value->id_Venta, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>

                    </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('full_name', 'cantidad del producto') !!}
                        {!! Form::text('cantidadProducto', $value->cantidadProducto, ['class' => 'form-control' , 'required' => 'required']) !!}
                    </div>


                </td>
                    <td>
                        <div class="form-group">
                            {!! Form::label('full_name', 'Total') !!}
                            {!! Form::text('Total', $value->Total, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>

                    </td>
                </table>
                <br>
                <br>
                <br>

            </div>
        </div>

        @endforeach




    </div>
@stop