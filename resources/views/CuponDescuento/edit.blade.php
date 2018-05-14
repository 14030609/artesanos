@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($payment,array('route' =>['CuponDescuento.update',$payment->id_CuponDescuento],'method'=>'PUT')) !!}

                {!! Form::hidden('id', $payment->id_CuponDescuento) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Fecha de Inicio') !!}
                    {!! Form::text('fecha_inicio', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Fecha de Termino') !!}
                    {!! Form::text('fecha_termino', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Porcentaje') !!}
                        {!! Form::text('porcentaje', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop