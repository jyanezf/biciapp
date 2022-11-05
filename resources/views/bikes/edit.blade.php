<x-app>
    {{-- Page title --}}
    <x-slot:title>
        Actualizar bicicleta
    </x-slot>
    <form
        action={{ route('bikes.update', $bike) }}
        class="basic-info"
        method="POST"
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
