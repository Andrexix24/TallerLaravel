@extends('layout.index')

@section('nombreModulo', 'Usuario / Registrar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <form method="POST" action="{{route('usuarios.registrar')}}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name="nombre" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Nombre</label>
                        </div>
                        <div class="form-floating mb-3 mb-md-0 mt-3">
                            <input name="apellidos" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Apellidos</label>
                        </div>
                        <div class="form-floating mb-3 mb-md-0 mt-3">
                            <input name="correo" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Correo</label>
                        </div>
                        <div class="form-floating mb-3 mb-md-0 mt-3">
                            <input name="telefono" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Telefono</label>
                        </div>
                        <div class="form-floating mb-3 mb-md-0 mt-3">
                            <input name="direccion" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Direccion</label>
                        </div>
                        <div class="col-md-12 mt-3">
                            <select class="form-select" aria-label="Default select example" name="rol">
                                <option selected>Seleccionar</option>
                                <option value="1">Admin</option>
                                <option value="2">Prueba</option>
                                <option value="3">Prueba2</option>
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