@auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('projects.index') }}">
            <i class="fas fa-list"></i> Mis Proyectos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('projects.create') }}">
            <i class="fas fa-plus"></i> Crear Proyecto
        </a>
    </li>
@endauth

@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
    </li>
@endguest