@extends('welcome')
@section('add')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Rol</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Rol.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop