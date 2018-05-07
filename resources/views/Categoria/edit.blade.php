@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($payment,array('route' =>['Categoria.update',$payment->id_Categoria],'method'=>'PUT')) !!}

                {!! Form::hidden('id', $payment->id_Categoria) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'Descripcion') !!}
                    {!! Form::textarea('Descripcion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop