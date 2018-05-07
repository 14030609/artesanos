@extends('welcome')
<html>
<head>
    <title>Lista de metodos de pago</title>
</head>

<body>
@section('list')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => '/Usuario/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Usuario.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Usuario.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Password</th>
                    <th>id_Rol</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre_Usuario }}</td>
                        <td>{{ $usuario->pass }}</td>
                        <td>{{ $usuario->id_Rol }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Usuario.edit',['id' => $usuario->id_Usuario] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Usuario/delete',['id' => $usuario->id_Usuario] )}}" >Eliminar</a>
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
