@extends('welcome')
<html>
<head>
    <title>Lista de metodos de pago</title>
</head>

<body>
@section('list')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => '/Inventario/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Inventario.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Inventario.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>id_Producto</th>
                    <th>id_Categoria</th>
                   <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->id_Producto }}</td>
                        <td>{{ $payment->id_Categoria }}</td>
                        <td>{{ $payment->Cantidad }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Inventario.edit',['id' => $payment->id_Producto] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Inventario/delete',['id' => $payment->id_Producto] )}}" >Eliminar</a>
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
