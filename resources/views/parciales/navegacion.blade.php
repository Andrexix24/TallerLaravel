<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('inicio')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Inicio
                </a>
                <a class="nav-link" href="{{route('categorias.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Categorias
                </a>
                <a class="nav-link" href="{{route('clientes.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Clientes
                </a><a class="nav-link" href="{{route('productos.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Productos
                </a><a class="nav-link" href="{{route('proveedores.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Proveedores
                </a><a class="nav-link" href="{{route('roles.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Roles
                </a><a class="nav-link" href="{{route('usuarios.listar')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Usuarios
                </a>
            </div>
        </div>
    </nav>
</div>