@extends('layout.index')

@section('nombreModulo', 'Productos / Listar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-1">
                        <a href="{{route('productos.formulario')}}" class="btn btn-success">Agregar</a>
                    </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($producto as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['nombre'] }}</td>
                                <td>{{ $item['descripcion'] }}</td>
                                <td>{{ $item['precio'] }}</td>
                                <td>{{ $item['categoria'] }}</td>
                                <td>
                                    <a href="{{route('productos.editar',$item['id'])}}" class="btn btn-primary">Editar</a>
                                    <a href="{{route('productos.confirmar',$item['id'])}}" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


@endsection