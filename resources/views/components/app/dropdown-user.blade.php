<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a
        class="nav-link dropdown-toggle hide-arrow"
        data-bs-toggle="dropdown"
        href="javascript:void(0);"
    >
        <div class="avatar avatar-online">
            <img
                alt
                class="w-px-40 h-auto rounded-circle"
                src="https://technext.github.io/stisla-1/assets/img/avatar/avatar-1.png"
            />
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a
                class="dropdown-item"
                href="javascript:void(0);"
            >
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <img
                                alt
                                class="w-px-40 h-auto rounded-circle"
                                src="https://technext.github.io/stisla-1/assets/img/avatar/avatar-1.png"
                            />
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                        @isset(auth()->user()->roles()->first()->display_name)
                            <small class="text-muted">{{ auth()->user()->roles()->first()->display_name }}</small>
                        @else
                            <small class="text-muted">Estudiante</small>
                        @endisset
                    </div>
                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route('users.settings', auth()->user()) }}"
            >
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Ajustes</span>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="/cerrar-sesion"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
            >
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Cerrar sesión</span>
            </a>
            <form
                action="{{ route('logout') }}"
                class="d-none"
                id="logout-form"
                method="POST"
            >
                @csrf
            </form>
        </li>
    </ul>
</li>
