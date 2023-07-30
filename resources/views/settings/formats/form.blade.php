<div class="modal-body">
    <div class="mb-4">
        <label class="form-label fw-bold">Naziv</label>
        <input type="text" class="form-control j-input" placeholder="Unesite format" name="name"
            value="{{ old('name', optional($format ?? null)->name) }}">
    </div>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bold">Opis</label>
        <textarea class="form-control j-textarea" placeholder="Kratak opis formata" rows="3"
            name="description">{{ old('description', optional($format ?? null)->description) }}</textarea>
    </div>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bold">Ikonica</label>
        <input class="form-control" type="file" name="file">
    </div>
</div>
