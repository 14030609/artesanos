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
                <h1 class="page-header">Ciudades</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Ciudad/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Ciudad.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Ciudad.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Ciudad</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>

                @foreach($ciudads as $ciudad)
                    <tr>
                        <td>{{ $ciudad->ciudad }}</td>
                        <td>{{ $ciudad->estado }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Ciudad.edit',['id' => $ciudad->id_Ciudad] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Ciudad/delete',['id' => $ciudad->id_Ciudad] )}}" >Eliminar</a>
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
