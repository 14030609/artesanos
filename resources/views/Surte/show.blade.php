@extends('welcome')
<html>
<head>
    <title>Lista de Surtees </title>
</head>

<body>
@section('list')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => '/Surte/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Surte.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Surte.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Iid_Proveedor</th>
                    <th>Iid_Producto</th>
                    <th>fecha</th>
                    <th>cantidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>

                        <td>{{ $payment->id_Proveedor}}</td>
                        <td>{{ $payment->id_Producto}}</td>
                        <td>{{ $payment->fecha}}</td>
                        <td>{{ $payment->Cantidad}}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Surte.edit',['id' => $payment->id_Proveedor] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Surte/delete',['id' => $payment->id_Surte] )}}" >Eliminar</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
</body>
</html>
