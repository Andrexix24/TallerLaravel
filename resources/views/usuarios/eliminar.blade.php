@extends('layout.index')

@section('nombreModulo', 'Usuarios / Eliminar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h1>Estas Seguro?</h1>
                    </div>
                    <div class="alert alert-light" role="alert">
                        <ul class="list-group">
                            <li class="list-group-item">ID: {{$usuario->id}}</li>
                            <li class="list-group-item">Nombre: {{$usuario->nombre}}</li>
                            <li class="list-group-item">Apellidos: {{$usuario->apellidos}}</li>
                            <li class="list-group-item">Correo: {{$usuario->correo}}</li>
                            <li class="list-group-item">Telefono: {{$usuario->telefono}}</li>
                            <li class="list-group-item">Dirección: {{$usuario->direccion}}</li>
                            <li class="list-group-item">Categoria: @foreach ($usuarios as $item) {{$item['rol']}} @endforeach</li>
                        </ul>
                    </div>
                    <a href="{{route('usuarios.listar')}}" class="btn btn-primary">Regresar</a>
                    <form action="{{route('usuarios.eliminar',$usuario->id)}}" method="post" class="pt-2">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection