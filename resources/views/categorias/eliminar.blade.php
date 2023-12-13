@extends('layout.index')

@section('nombreModulo', 'Categorias / Eliminar')

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
                            <li class="list-group-item">ID: {{$categoria->id}}</li>
                            <li class="list-group-item">Nombre: {{$categoria->categoria}}</li>
                            <li class="list-group-item">Descripción: {{$categoria->descripcion}}</li>
                        </ul>
                    </div>
                    <a href="{{route('categorias.listar')}}" class="btn btn-primary">Regresar</a>
                    <form action="{{route('categorias.eliminar',$categoria->id)}}" method="post" class="pt-2">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection