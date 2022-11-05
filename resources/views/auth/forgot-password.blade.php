@push('page-css')
    <link rel="stylesheet" href="{{ asset('app/vendor/css/pages/page-auth.css') }}" />
@endpush

<x-app.skeleton>
    {{-- Page title --}}
    <x-slot:title>
        Recuperar contraseña
    </x-slot>

    {{-- Card --}}
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                {{--Forgot Password --}}
                <div class="card">
                    <div class="card-body">
                        {{--  Logo  --}}
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <x-app.logo />
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">¿Has olvidado tu contraseña? 🔒</h4>
                        <p class="mb-4">Ingrese su correo electrónico y le enviaremos instrucciones para restablecer su contraseña</p>
                        <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input
                                       type="text"
                                       class="form-control"
                                       id="email"
                                       name="email"
                                       placeholder="Enter your email"
                                       autofocus />
                            </div>
                            <button class="btn btn-primary d-grid w-100">Enviar instrucciones</button>
                        </form>
                        <div class="text-center">
                            <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Atrás para iniciar sesión
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app.skeleton>
