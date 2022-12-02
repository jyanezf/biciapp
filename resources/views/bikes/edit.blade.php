<x-app>
    {{-- Page title --}}
    <x-slot:title>
        Actualizar bicicleta
    </x-slot>
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
            <a
                class="nav-link active"
                href="{{ route('bikes.index') }}"
            > Bicicletas</a>
        </li>
    </ul>
    <form
        action={{ route('bikes.update', $bike) }}
        class="basic-info"
        method="POST"
        enctype="multipart/form-data"
    >
        @method('patch')
        <x-forms.bikes :bike="$bike">
            <x-slot:letterTitle>
                {{ 'Formulario para actualizar información de la bicileta' }}
            </x-slot>
            <x-slot:textButton>
                {{ 'Actualizar' }}
            </x-slot>
        </x-app.forms.bikes>
    </form>
</x-app>
