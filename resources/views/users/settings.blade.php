<x-app>
    <x-slot:title>
        Ajustes de usuario
        </x-slot>

        @if (session('status'))
            <div class="alert alert-success" role="alert">Información de perfil actualizada</div>
        @endif

        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    href="{{ route('bikes.index') }}"
                > Bicicletas</a>
            </li>
        </ul>

        <div class="card mb-4">
            <h5 class="card-header">Detalles del perfil</h5>


            <div class="card-body">
                <form
                    action="{{ route('user-profile-information.update') }}"
                    id="formAccountSettings"
                    method="POST"
                >
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label
                                class="form-label"
                                for="name"
                            >Nombre completo</label>
                            <input
                                autofocus
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Jhon Doe"
                                type="text"
                                value="{{ old('name', $user->name) }}"
                            />
                        </div>
                        @error('name', 'updateProfileInformation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3 col-md-6">
                            <label
                                class="form-label"
                                for="email"
                            >Correo electrónico</label>
                            <input
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="john.doe@example.com"
                                type="text"
                                value="{{ old('email', $user->email) }}"
                            />
                            @error('email', 'updateProfileInformation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label
                                class="form-label"
                                for="organization"
                            >Organization</label>
                            <input
                                class="form-control"
                                id="organization"
                                name="organization"
                                readonly
                                type="text"
                                value="Fundación Jaime Benítez Tobón"
                            />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label
                                class="form-label"
                                for="phone"
                            >Teléfono</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">CO (+57)</span>
                                <input
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    placeholder="3102234567"
                                    type="text"
                                    value="{{ old('phone', $user->phone) }}"
                                />
                            </div>
                            @error('phone', 'updateProfileInformation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label
                                class="form-label"
                                for="country"
                            >APTO</label>
                            <select
                                class="select2 form-select"
                                id="apartment"
                                name="apartment"
                            >
                                <option>Seleccione apartamento</option>
                                <optgroup label="Ingrumá 1">
                                    <option
                                        @if ('107-1' == old('apartment', $user->apartment)) selected @endif
                                        value="107-1"
                                    >107</option>
                                    <option
                                        @if ('210' == old('apartment', $user->apartment)) selected @endif
                                        value="210"
                                    >210</option>
                                    <option
                                        @if ('305' == old('apartment', $user->apartment)) selected @endif
                                        value="305"
                                    >305</option>
                                    <option
                                        @if ('306' == old('apartment', $user->apartment)) selected @endif
                                        value="306"
                                    >306</option>
                                    <option
                                        @if ('404' == old('apartment', $user->apartment)) selected @endif
                                        value="404"
                                    >404</option>
                                    <option
                                        @if ('406' == old('apartment', $user->apartment)) selected @endif
                                        value="406"
                                    >406</option>
                                    <option
                                        @if ('502-a' == old('apartment', $user->apartment)) selected @endif
                                        value="502-a"
                                    >502 antiguo</option>
                                    <option
                                        @if ('502-n' == old('apartment', $user->apartment)) selected @endif
                                        value="502-n"
                                    >502 nuevo</option>
                                    <option
                                        @if ('506-1' == old('apartment', $user->apartment)) selected @endif
                                        value="506-1"
                                    >506</option>
                                    <option
                                        @if ('508' == old('apartment', $user->apartment)) selected @endif
                                        value="508"
                                    >508</option>
                                </optgroup>
                                <optgroup label="Ingrumá 2">
                                    <option
                                        @if ('106' == old('apartment', $user->apartment)) selected @endif
                                        value="106"
                                    >106</option>
                                    <option
                                        @if ('107-2' == old('apartment', $user->apartment)) selected @endif
                                        value="107-2"
                                    >107</option>
                                    <option
                                        @if ('109' == old('apartment', $user->apartment)) selected @endif
                                        value="109"
                                    >109</option>
                                    <option
                                        @if ('303' == old('apartment', $user->apartment)) selected @endif
                                        value="303"
                                    >303</option>
                                    <option
                                        @if ('506-2' == old('apartment', $user->apartment)) selected @endif
                                        value="506-2"
                                    >506</option>
                                </optgroup>
                            </select>
                            @error('apartment', 'updateProfileInformation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button
                            class="btn btn-primary me-2"
                            type="submit"
                        >Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
</x-app>
