<div class="submenu">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-inbox" aria-hidden="true"></i></span>
                    <a class="nav-link" href="/">Tablero</a>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-users" aria-hidden="true"></i></span>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarSubmenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empleados</a>
                    <div class="dropdown-menu" aria-labelledby="navbarSubmenu2">
                        <a class="dropdown-item" href="{{ route('usuarios') }}">Empleados</a>
                        <a class="dropdown-item" href="#">Permisos</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <a class="nav-link" href="#">Reserva</a>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-home" aria-hidden="true"></i></span>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Habitaciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarSubmenu">
                        <a class="dropdown-item" href="{{ route('habitacion') }}">Habitaciones</a>
                        <a class="dropdown-item" href="{{ route('tipohabitacion') }}">Tipos de habitaciones</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-file" aria-hidden="true"></i></span>
                    <a class="nav-link" href="#">Departamentos</a>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-cutlery" aria-hidden="true"></i></span>
                    <a class="nav-link" href="#">Restaurantes</a>
                </div>
            </div>
            <div class="col">
                <div class="categoria-menu text-center">
                    <span><i class="fa fa-building-o" aria-hidden="true"></i></span>
                    <a class="nav-link" href="#">Instalaciones</a>
                </div>
            </div>
        </div>              
    </div>
</div>  