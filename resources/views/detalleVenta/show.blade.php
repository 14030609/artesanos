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
                <h1 class="page-header">Ventas</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-0">


            {!! Form::open(['route' => '/Venta/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Venta.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Venta.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Transaccion</th>
                    <th>id_Usuario</th>
                    <th>Fecha_Venta</th>
                    <th>Subtotal</th>
                    <th>iva</th>
                    <th>TotalVenta</th>
                    <th>id_CuponDescuento</th>
                    <th>id_MetodosPago</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->id_Venta }}</td>
                        <td>{{ $payment->id_Usuario }}</td>
                        <td>{{ $payment->Fecha_Venta }}</td>
                        <td>{{ $payment->Subtotal }}</td>
                        <td>{{ $payment->iva }}</td>
                        <td>{{ $payment->TotalVenta }}</td>
                        <td>{{ $payment->id_CuponDescuento }}</td>
                        <td>{{ $payment->id_MetodosPago }}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Venta.edit',['id' => $payment->id_Venta] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Venta/delete',['id' => $payment->id_Venta] )}}" >Eliminar</a>
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
