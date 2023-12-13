@extends('layout.index')

@section('nombreModulo', 'Proveedores / Eliminar')

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
                            <li class="list-group-item">ID: {{$proveedores->id}}</li>
                            <li class="list-group-item">Nombre: {{$proveedores->nombre}}</li>
                            <li class="list-group-item">Dirección: {{$proveedores->direccion}}</li>
                            <li class="list-group-item">Telefono: {{$proveedores->telefono}}</li>
                            <li class="list-group-item">Correo: {{$proveedores->correo}}</li>
                        </ul>
                    </div>
                    <a href="{{route('proveedores.listar')}}" class="btn btn-primary">Regresar</a>
                    <form action="{{route('proveedores.eliminar',$proveedores->id)}}" method="post" class="pt-2">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection