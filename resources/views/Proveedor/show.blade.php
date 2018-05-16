@extends('welcome')
<html>
<head>
    <title>Lista de Proveedores </title>
</head>

<body>
@section('list')


    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Proveedores</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Proveedor/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Proveedor.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Proveedor.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>e_mail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->nombre }}</td>
                        <td>{{ $payment->telefono }}</td>
                        <td>{{ $payment->direccion }}</td>
                        <td>{{ $payment->e_mail }}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Proveedor.edit',['id' => $payment->id_Proveedor] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Proveedor/delete',['id' => $payment->id_Proveedor] )}}" >Eliminar</a>
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
