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
        action={{ route('bikes.toLoan', $bike) }}
        class="basic-info"
        method="POST"
    >
        @method('patch')
        <x-forms.loan :bike="$bike">
            <x-slot:letterTitle>
                {{ 'Formulario de prestamo de bicileta' }}
            </x-slot>
            <x-slot:textButton>
                @if ($bike->status == 'available')
                    {{ 'Tomar' }}
                @else
                    {{ 'Entregar' }}
                @endif
            </x-slot>
        </x-app.forms.bikes>
    </form>
</x-app>
