@extends('welcome')
<html>
<head>
    <title>Lista de Surtees </title>
</head>

<body>
@section('list')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Surtir Productos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
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
                    <th>Proveedor</th>
                    <th>Producto</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($surte as $surtir)
                    <tr>

                        <td>{{ $surtir->proveedor}}</td>
                        <td>{{ $surtir->producto}}</td>
                        <td>{{ $surtir->fecha}}</td>
                        <td>{{ $surtir->cantidad}}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Surte.edit',['id' => $surtir->id_Proveedor] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Surte/delete',['id_Ṕroveedor' => $surtir->id_Proveedor,'id_Producto' => $surtir->id_Producto,'fecha' => $surtir->fecha] )}}" >Eliminar</a>
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
