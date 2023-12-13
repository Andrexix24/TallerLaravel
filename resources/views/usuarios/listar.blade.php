@extends('layout.index')

@section('nombreModulo', 'Usuarios / Listar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-1">
                        <a href="{{route('usuarios.formulario')}}" class="btn btn-success">Agregar</a>
                    </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Dirección</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['nombre'] }}</td>
                                <td>{{ $item['apellidos'] }}</td>
                                <td>{{ $item['correo'] }}</td>
                                <td>{{ $item['telefono'] }}</td>
                                <td>{{ $item['direccion'] }}</td>
                                <td>{{ $item['rol'] }}</td>
                                <td>
                                    <a href="{{route('usuarios.editar',$item['id'])}}" class="btn btn-primary">Editar</a>
                                    <a href="{{route('usuarios.confirmar',$item['id'])}}" class="btn btn-danger">Eliminar</a>
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