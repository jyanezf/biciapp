@push('page-css')
    <link
        href="{{ asset('app/vendor/css/pages/page-auth.css') }}"
        rel="stylesheet"
    />
@endpush

<x-app.skeleton>
    {{-- Page title --}}
    <x-slot:title>
        Registrarse
    </x-slot>

    {{-- Card --}}
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                {{-- Register Card --}}
                <div class="card">
                    <div class="card-body">
                        {{-- Logo  --}}
                        <div class="app-brand justify-content-center">
                            <a
                                class="app-brand-link gap-2"
                                href="{{ url('/')}}"
                            >
                                <x-app.logo />
                            </a>
                        </div>
                        <h4 class="mb-2">La aventura comienza aquí 🚀</h4>
                        <p class="mb-4">¡Registrate y use una bicicleta!</p>

                        <form
                            action="{{ route('register') }}"
                            class="mb-3"
                            id="formAuthentication"
                            method="POST"
                        >
                            @csrf
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="name"
                                >Nombre completo</label>
                                <input
                                    autofocus
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Ingresa tu nombre"
                                    type="text"
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="email"
                                >Correo electrónico</label>
                                <input
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Ingresa tu correo"
                                    type="text"
                                />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label
                                    class="form-label"
                                    for="password"
                                >Contraseña</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        aria-describedby="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        type="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label
                                    class="form-label"
                                    for="password_confirmation"
                                >Confirma contraseña</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        aria-describedby="password_confirmation"
                                        class="form-control"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        type="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <button class="btn btn-primary d-grid w-100"  type="submit">Registrarse</button>
                        </form>

                        <p class="text-center">
                            <span>¿Ya tienes una cuenta?</span> 
                            <a href="{{ route('login') }}">
                                <span>Iniciar sesión en su lugar</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app.skeleton>
