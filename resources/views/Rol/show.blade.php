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
                <h1 class="page-header">Roles</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Rol/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Rol.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Rol.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rols as $rol)
                    <tr>
                        <td>{{ $rol->descripcion }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Rol.edit',['id' => $rol->id_Rol] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Rol/delete',['id' => $rol->id_Rol] )}}" >Eliminar</a>
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
