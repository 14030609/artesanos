@extends('welcome')
<html>
<head>
    <title>Lista de Productoes </title>
</head>

<body>
@section('list')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Productos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Producto/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Producto.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Producto.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Nombre</th>
                    <th>precio de venta</th>
                    <th>precio de compra </th>
                </tr>
                </thead>
                <tbody>
                @foreach($nombreProducto as $payment)
                    <tr>
                        <td>{{ $payment->Descripcion}}</td>
                        <td>{{ $payment->nombre }}</td>
                        <td>{{ $payment->precioVenta }}</td>
                        <td>{{ $payment->precioCompra }}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Producto.edit',['id' => $payment->id_Producto] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Producto/delete',['id' => $payment->id_Producto] )}}" >Eliminar</a>
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
