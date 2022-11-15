<x-app>
    {{-- Page title --}}
    <x-slot:title>
        Registrar bicicleta
    </x-slot>
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
