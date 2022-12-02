<x-app>
    {{-- Page title --}}
    <x-slot:title>
        Bicicletas
        </x-slot>

        {{-- Buttons --}}

        @if (session('save') == 'store')
            <div
                class="alert alert-success"
                role="alert"
            >Bicicleta registrada</div>
        @endif

        @if (session('save') == 'update')
            <div
                class="alert alert-success"
                role="alert"
            >Bicicleta actualizada</div>
        @endif

        <div class="d-flex justify-content-end mb-4 gap-3">
            @permission('bikes-create')
                <a
                    class="btn btn-primary"
                    href="{{ route('bikes.create') }}"
                >Registrar bicicleta</a>
            @endpermission
        </div>

        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a
                    class="nav-link {{ setActive('bikes.index') }}"
                    href="{{ route('bikes.index') }}"
                > Todas</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ setActive('bikes.available') }}"
                    href="{{ route('bikes.available') }}"
                >Disponibles</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ setActive('bikes.busy') }}"
                    href="{{ route('bikes.busy') }}"
                > Ocupadas</a>
            </li>
        </ul>

        {{-- Cards --}}
        <div @class([
            'row row-cols-1',
            'row-cols-md-3' => $bikes->isNotEmpty(),
            'g-4 mb-5',
        ])>

            @forelse ($bikes as $bike)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ $bike->reference }}</h5>
                                @permission(['bikes-update', 'bikes-delete'])
                                    <div class="dropdown">
                                        <button
                                            aria-expanded="false"
                                            class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                        >
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div
                                            class="dropdown-menu"
                                            style=""
                                        >
                                            @permission('bikes-update')
                                                <a
                                                    class="dropdown-item"
                                                    href="{{ route('bikes.edit', $bike) }}"
                                                >
                                                    <i class="bx bx-edit-alt me-1"></i>
                                                    Editar
                                                </a>
                                            @endpermission
                                            @permission('bikes-delete')
                                                <a
                                                    class="dropdown-item"
                                                    href="/eliminar"
                                                    onclick="event.preventDefault(); document.getElementById('destroy-button-{{ $bike->id }}').click();"
                                                >
                                                    <i class="bx bx-trash me-1"></i>
                                                    Eliminar
                                                </a>
                                                <form
                                                    action="{{ route('bikes.destroy', $bike) }}"
                                                    class="d-none"
                                                    id="destroy-form"
                                                    method="POST"
                                                    name="destroy-form"
                                                >
                                                    @csrf @method('delete')
                                                    <button
                                                        id="destroy-button-{{ $bike->id }}"
                                                        type="submit"
                                                    ></button>
                                                </form>
                                            @endpermission
                                        </div>
                                    </div>
                                @endpermission
                            </div>
                            @if ($bike->status == 'available')
                                <h6 class="card-subtitle text-success">Disponible</h6>
                            @else
                                <h6 class="card-subtitle text-danger">Ocupada</h6>
                            @endif
                        </div>

                        @isset($bike->photo)
                            <img
                                alt="Card image cap"
                                class="img-fluid"
                                src="{{ Storage::url($bike->photo) }}"
                            >
                        @else
                            <img
                                alt="Card image cap"
                                class="img-fluid"
                                src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/assets/img/elements/2.jpg"
                            >
                        @endisset
                        <div class="card-body">
                            <p class="card-text">Ten precaución en la vía, cuídate y cuida la bicicleta :3</p>
                            @if ($bike->status == 'available')
                                <a
                                    class="card-link"
                                    href="{{ route('bikes.loan', $bike) }}"
                                >Usar</a>
                                <button
                                    class="btn btn-link"
                                    disabled
                                    type="button"
                                >Entregar</button>
                            @else
                                <button
                                    class="btn btn-link"
                                    disabled
                                    type="button"
                                >Usar</button>
                                <a
                                    class="card-link"
                                    href="{{ route('bikes.loan', $bike) }}"
                                >Entregar</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="layout-demo-wrapper">
                    <img src="https://raw.githubusercontent.com/jyanezf/biciapp/a9bccae4d5c946ea20f3529861dfe6c2dc29335f/public/app/img/undraw_questions_re_1fy7.svg" alt="page-misc-error-light" width="500" class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png" data-app-light-img="illustrations/page-misc-error-light.png">
                    <div class="layout-demo-info">
                        <h4>No se encontraron bicicletas</h4>
                        <p>Al agregar bicicletas o usarlas estas se mostraran aquí</p>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-end mx-auto gap-3">
            {{ $bikes->links() }}
        </div>
</x-app>
