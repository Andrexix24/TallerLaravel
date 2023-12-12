@extends('layout.index')

@section('nombreModulo', 'Productos / Editar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <form method="POST" action="{{route('productos.actualizar',$producto->id)}}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name="nombre" value="{{$producto->nombre}}" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-floating">
                            <input name="descripcion" value="{{$producto->descripcion}}" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Descripcion</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-floating">
                            <input name="precio" value="{{$producto->precio}}" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">precio</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                            <select class="form-select" aria-label="Default select example" name="categoria">
                                <option selected>
                                    @foreach ($productos as $item)
                                        {{$item['categoria']}}
                                    @endforeach
                                </option>
                                @foreach ($categorias as $item)
                                    <option value="{{$item['id']}}">{{$item['categoria']}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Guardar</button></div>
                </div>
            </form>
        </div>
    </main>


@endsection