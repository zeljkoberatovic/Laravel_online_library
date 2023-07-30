<div class="modal-body">
    <div class="mb-4">
        <label class="form-label fw-bold">Ime i prezime</label>
        <input type="text" class="form-control j-input" placeholder="Unesite ime i prezime" name="name_surname" required value="{{ old('name_surname', optional($author ?? null)->name_surname) }}"
            value="">
    </div>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <label class="form-label fw-bold">Biografija</label>
        <textarea class="form-control" placeholder="Biografija" rows="3"
            name="biography">{{ old('biography', optional($author ?? null)->biography) }}</textarea>
    </div>
    @error('biography')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    
    
</div>
