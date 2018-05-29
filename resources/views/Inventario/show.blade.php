@extends('welcome')
<html>
<head>
    <title>Lista de metodos de pago</title>
</head>

<body>
@section('list')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inventario</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
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
                    <th>Producto</th>
                    <th>Categoria</th>
                   <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($inventario as $payment)
                    <tr>
                        <td>{{ $payment->Nombre }}</td>
                        <td>{{ $payment->Descripcion }}</td>
                        <td>{{ $payment->Cantidad }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Inventario.edit',['id' => $payment->id_Producto] )}}" >Editar</a>
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
