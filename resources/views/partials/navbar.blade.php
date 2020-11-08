<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color: white"><span style="font-size:15pt">&#x2655;</span> Hotel la Riviera </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('hotel') && ! Request::is('hotel/create')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Hotel</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                                <a class="dropdown-item" href="{{url('/hotel/misionvision')}}">Mision/Vision</a>
                                <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('servicios') && ! Request::is('servicios/create')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Servicios</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                                <a class="dropdown-item" href="{{url('/servicios/eventos/{id}')}}">Eventos</a>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/reservas')}}">Reservas</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/contacto')}}">Contactos</a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
