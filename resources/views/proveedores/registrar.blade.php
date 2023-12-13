@extends('layout.index')

@section('nombreModulo', 'Proveedores / Registrar')

@section('contenidoGeneral')


    <main>
        <div class="container-fluid px-4">
            <form method="POST" action="{{route('proveedores.registrar')}}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3 mb-md-0">
                            <input required name="nombre" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-floating">
                            <input required name="direccion" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Dirección</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-floating">
                            <input required name="telefono" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Telefono</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-floating">
                            <input required name="correo" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Correo</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Guardar</button></div>
                </div>
            </form>
        </div>
    </main>


@endsection