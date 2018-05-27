@extends('welcome')
@section('add')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Surtir</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Surte.store', 'method' => 'post', 'validate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'Producto') !!}

                    <select class="form-control" name="id_Producto", id="id_Categoria">

                        @foreach($producto as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('full_name', 'Proveedor') !!}

                    <select class="form-control" name="id_Proveedor", id="id_Categoria">

                        @foreach($proveedor as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('fecha', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Cantidad', 'Cantidad') !!}
                    {!! Form::text('Cantidad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop