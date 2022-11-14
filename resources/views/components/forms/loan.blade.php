@props(['bike'])

@csrf
<div class="col-xxl">
    <div class="card mb-4">

        <div class="card-header d-flex align-items-center justify-content-end">
            <small class="text-muted float-end">{{ $letterTitle }}</small>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <label
                    class="col-sm-2 col-form-label"
                    for="basic-icon-default-fullname"
                >
                    Referencia
                </label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <span
                            class="input-group-text"
                            id="basic-icon-default-fullname2"
                        >
                            <i class='bx bx-bookmark-minus'></i>
                        </span>
                        <input
                            aria-describedby="basic-icon-default-fullname2"
                            aria-label="FJBT001"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            name="reference"
                            placeholder="Ingresa una referencia para la bicicleta"
                            type="text"
                            value="{{ old('reference', $bike->reference) }}"
                        >
                    </div>
                </div>

            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button
                        class="btn btn-primary"
                        type="submit"
                    >{{ $textButton }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
