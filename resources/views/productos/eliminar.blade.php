@extends('layout.index')

@section('nombreModulo', 'Productos / Eliminar')

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
                            <li class="list-group-item">ID: {{$producto->id}}</li>
                            <li class="list-group-item">Nombre: {{$producto->nombre}}</li>
                            <li class="list-group-item">Descripción: {{$producto->descripcion}}</li>
                            <li class="list-group-item">Precio: {{$producto->precio}}</li>
                            <li class="list-group-item">Categoria: @foreach ($productos as $item) {{$item['categoria']}} @endforeach</li>
                        </ul>
                    </div>
                    <a href="{{route('productos.listar')}}" class="btn btn-primary">Regresar</a>
                    <form action="{{route('productos.eliminar',$producto->id)}}" method="post" class="pt-2">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection