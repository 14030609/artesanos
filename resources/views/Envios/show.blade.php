@extends('welcome')
<html>
<head>
    <title>Lista de metodos de pago</title>
</head>

<body>
@section('list')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => '/Envios/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Envios.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Envios.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($envios as $envio)
                    <tr>
                        <td>{{ $envio->nombre }}</td>
                        <td>{{ $envio->email }}</td>
                        <td>{{ $envio->id_Ciudad }}</td>
                        <td>{{ $envio->id_Estado }}</td>
                        <td>{{ $envio->telefono }}</td>
                        <td>{{ $envio->direccion }}</td>
                        <td>{{ $envio->id_Usuario }}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Envios.edit',['id' => $envio->id_Envio] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Envios/delete',['id' => $envio->id_Envio ] )}}" >Eliminar</a>
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
