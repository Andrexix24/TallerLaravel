@extends('layout.index')

@section('nombreModulo', 'Roles / Listar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-1">
                        <a href="{{route('roles.formulario')}}" class="btn btn-success">Agregar</a>
                    </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['rol'] }}</td>
                                <td>
                                    <a href="{{route('roles.editar',$item['id'])}}" class="btn btn-primary">Editar</a>
                                    <a href="{{route('roles.confirmar',$item['id'])}}" class="btn btn-danger">Eliminar</a>
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