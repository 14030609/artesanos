@extends('welcome')
<html>
<head>
    <title>Lista de cupones de descuento </title>
</head>

<body>
@section('list')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cupones de Descuento</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/CuponDescuento/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('CuponDescuento.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('CuponDescuento.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                    <th>Porcentaje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->nombre }}</td>
                        <td>{{ $payment->descripcion }}</td>
                        <td>{{ $payment->fecha_inicio }}</td>
                        <td>{{ $payment->fecha_termino }}</td>
                        <td>{{ $payment->porcentaje }}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('CuponDescuento.edit',['id' => $payment->id_CuponDescuento] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/CuponDescuento/delete',['id' => $payment->id_CuponDescuento] )}}" >Eliminar</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@stop
</body>
</html>
