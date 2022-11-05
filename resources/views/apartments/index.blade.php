<x-app>
    <x-slot:title>
        Apartamentos
        </x-slot>

        <div class="d-flex justify-content-end mb-4 gap-3">
            @permission('apartments-create')
                <a
                    class="btn btn-primary"
                    href="{{ route('apartments.create') }}"
                >Registrar apartamento</a>
            @endpermission
        </div>

        <div class="card">
            <h5 class="card-header">Apartamentos</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>N° Apartamento</th>
                            <th>Puerta</th>
                            <th>Torre</th>
                            <th>Ingruma</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($apartments as $apartment)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $apartment->number }}</strong>
                                </td>
                                <td>Puerta {{ $apartment->ingruma }}</td>
                                <td>Torre {{ $apartment->tower }}</td>
                                <td>Ingruma {{ $apartment->ingruma }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                        >
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a
                                                class="dropdown-item"
                                                href="javascript:void(0);"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a
                                                class="dropdown-item"
                                                href="javascript:void(0);"
                                            ><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td
                                    class="text-center"
                                    colspan="5"
                                >No hay apartamentos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
</x-app>
