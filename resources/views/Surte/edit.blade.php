@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($payment,array('route' =>['Surte.update',$payment->id_Surte],'method'=>'PUT')) !!}

                {!! Form::hidden('id', $payment->id_Surte) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'id del proveedor') !!}
                    {!! Form::text('id_Proveedor', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'id del producto') !!}
                    {!! Form::text('id_Producto', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::text('fecha', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Cantidad', 'Cantidad') !!}
                    {!! Form::date('cantidad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop