<x-app>
    <x-slot:title>
        Ajustes de usuario
    </x-slot>

    <div class="card mb-4">
        <h5 class="card-header">Detalles del perfil</h5>
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                    alt="user-avatar"
                    class="d-block rounded"
                    height="100"
                    id="uploadedAvatar"
                    src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png"
                    width="100"
                />
                <div class="button-wrapper">
                    <label
                        class="btn btn-primary me-2 mb-4"
                        for="upload"
                        tabindex="0"
                    >
                        <span class="d-none d-sm-block">Subir nueva foto</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                            accept="image/png, image/jpeg"
                            class="account-file-input"
                            hidden
                            id="upload"
                            type="file"
                        />
                    </label>
                    <button
                        class="btn btn-outline-secondary account-image-reset mb-4"
                        type="button"
                    >
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Resetear</span>
                    </button>

                    <p class="text-muted mb-0">Permitido JPG, GIF o PNG. Tamaño máximo de 800K</p>
                </div>
            </div>
        </div>
        <hr class="my-0" />
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
                            type="text"
                            value="Fundación Jaime Benítez Tobón"
                            readonly
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
                    </div>
                    <div class="mb-3 col-md-6">
                        <label
                            class="form-label"
                            for="address"
                        >Apto</label>
                        <input
                            class="form-control"
                            id="address"
                            name="address"
                            placeholder="Address"
                            type="text"
                        />
                    </div>
                </div>
                <div class="mt-2">
                    <button
                        class="btn btn-primary me-2"
                        type="submit"
                    >Guardar cambios</button>
                    <button
                        class="btn btn-outline-secondary"
                        type="reset"
                    >Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</x-app>
