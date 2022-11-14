@push('page-css')
    <link
        href="{{ asset('app/vendor/css/pages/page-auth.css') }}"
        rel="stylesheet"
    />
@endpush

<x-app.skeleton>
    {{-- Page title --}}
    <x-slot:title>
        Inicio de sesión
    </x-slot>
    
    {{-- Card --}}
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                {{--  Login  --}}
                <div class="card">
                    <div class="card-body">
                        {{--  Logo  --}}
                        <div class="app-brand justify-content-center">
                            <a
                                class="app-brand-link gap-2"
                                href="{{ url('/')}}"
                            >
                                <x-app.logo />
                            </a>
                        </div>
           
                        <h4 class="mb-2">¡Bienvenido a {{ config('app.name') }}! 👋</h4>
                        <p class="mb-4">Inicia sesión en tu cuenta y comienza la aventura.</p>

                        <form
                            action="{{ route('login') }}"
                            class="mb-3"
                            id="formAuthentication"
                            method="POST"
                        >
                            @csrf
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="email"
                                >Correo electrónico</label>
                                <input
                                    autofocus
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Ingresa tu correo"
                                    type="text"
                                />
                                @error('email')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
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
                                @error('password')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        id="remember"
                                        name="remember"
                                        type="checkbox"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="remember"
                                    >Recuérdame</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button
                                    class="btn btn-primary d-grid w-100"
                                    type="submit"
                                >Iniciar sesión</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>¿Nuevo en nuestra plataforma?</span>
                            <a href="{{ route('register') }}">
                                <span>Crea una cuenta</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app.skeleton>
