<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-mb-3">

        <li class="nav-item {{ Request::route()->named('employees.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('employees.index') ? 'active' : '' }}"
                href="{{ route('employees.index') }}" wire:navigate>
                <i class="fas fa-dove text-red"></i> Trabajador/Empleado
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('bosses.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('bosses.index') ? 'active' : '' }}"
                href="{{ route('bosses.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Jefes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('charges.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('charges.index') ? 'active' : '' }}"
                href="{{ route('charges.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Cargos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('attendance_registrations.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('attendance_registrations.index') ? 'active' : '' }}"
                href="{{ route('attendance_registrations.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Registro de asistencia
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('departaments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('departaments.index') ? 'active' : '' }}"
                href="{{ route('departaments.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Departamentos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('horaries.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('horaries.index') ? 'active' : '' }}"
                href="{{ route('horaries.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Horarios
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('absences.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('absences.index') ? 'active' : '' }}"
                href="{{ route('absences.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Ausencias
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('incidences.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('incidences.index') ? 'active' : '' }}"
                href="{{ route('incidences.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Incidencias
            </a>
        </li>

    </ul>
</div>
