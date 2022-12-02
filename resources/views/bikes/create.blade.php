<x-app>
    {{-- Page title --}}
    <x-slot:title>
        Registrar bicicletas
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
        action={{ route('bikes.store', $bike) }}
        class="basic-info needs-validation"
        method="POST"
        enctype="multipart/form-data"
    >
        <x-forms.bikes :bike="$bike">
            <x-slot:letterTitle>
                {{ 'Formulario para registrar bicileta' }}
            </x-slot>
            <x-slot:textButton>
                {{ 'Registrar' }}
            </x-slot>
        </x-forms.bikes>
    </form>
</x-app>
