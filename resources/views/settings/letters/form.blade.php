<div class="modal-body">
    <div class="mb-4">
        <label class="form-label">Naziv pisma</label>
        <input type="text" class="form-control" placeholder="Unesite naziv pisma" name="name"
            value="{{ old('name', optional($letter ?? null)->name) }}">
    </div>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bold">Opis</label>
        <textarea class="form-control" placeholder="Kratak opis pisma" rows="3"
            name="description">{{ old('description', optional($letter ?? null)->description) }}</textarea>
    </div>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
