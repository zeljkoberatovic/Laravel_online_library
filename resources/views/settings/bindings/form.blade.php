<div class="modal-body">
    <div class="mb-4">
        <label class="form-label fw-bolder">Naziv</label>
        <input type="text" class="form-control j-input" placeholder="Unesite naziv žanra" name="name"
            value="{{ old('name', optional($binding ?? null)->name) }}">
    </div>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bolder">Opis</label>
        <textarea class="form-control j-textarea" placeholder="Kratak opis" rows="3" 
            name="description">{{ old('description', optional($binding ?? null)->description) }}</textarea>
    </div>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bolder">Ikonica</label>
        <input class="form-control" type="file" name="file">
    </div>
</div>
