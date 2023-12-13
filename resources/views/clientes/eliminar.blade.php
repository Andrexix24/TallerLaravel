@extends('layout.index')

@section('nombreModulo', 'Clientes / Eliminar')

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
                            <li class="list-group-item">ID: {{$cliente->id}}</li>
                            <li class="list-group-item">Nombre: {{$cliente->nombre}}</li>
                            <li class="list-group-item">Dirección: {{$cliente->direccion}}</li>
                            <li class="list-group-item">Telefono: {{$cliente->telefono}}</li>
                            <li class="list-group-item">Correo: {{$cliente->correo}}</li>
                        </ul>
                    </div>
                    <a href="{{route('clientes.listar')}}" class="btn btn-primary">Regresar</a>
                    <form action="{{route('clientes.eliminar',$cliente->id)}}" method="post" class="pt-2">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection