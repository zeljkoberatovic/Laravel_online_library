<div class="row row-cols-1 row-cols-md-2">
    <div class="col pt-0 pb-3">
        <div class="card p-3">

<?php //dd($book); ?>

            <!-- Naziv knjige -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <input type="text" class="form-control rounded-0" name="title" placeholder="Naziv" required value="{{ old('title', optional($book ?? null)->title) }}">
                    <label>Naziv knjige</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('title') {{ $message }} @enderror
                </div>
            </div>

            <!-- Opis -->
            <div>
                <div class="input-group has-validation">
                    <div class="form-floating is-invalid">
                        <textarea class="form-control rounded-0" name="description" placeholder="Opis" style="height: 200px" id="editor" required>
                            {{ old('description', optional($book ?? null)->description) }}
                        </textarea>
                        <label>Opis</label>
                    </div>
                    <div class="invalid-feedback mb-3">
                        @error('description') {{ $message }} @enderror
                    </div>
                </div>
            </div>

            <!-- Broj strana -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <input type="text" class="form-control rounded-0" name="page_count" placeholder="Broj strana" required value="{{ old('page_count', optional($book ?? null)->page_count) }}">
                    <label>Broj strana</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('title') {{ $message }} @enderror
                </div>
            </div>

            <!-- ISBN -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <input type="text" class="form-control rounded-0" name="isbn" placeholder="ISBN" required value="{{ old('isbn', optional($book ?? null)->isbn) }}">
                    <label>ISBN</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('isbn') {{ $message }} @enderror
                </div>
            </div>

            <!-- Autor -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid" j-ttip j-ttip-label='more-option'>
                    <select class="form-select rounded-0" size="3" required name="authors[]" multiple style="height: 98px;">
                        @foreach ($authors as $author)
                        <option value="{{ $author->id }}" 
                        @if( isset($book) && $book->authors->contains('id', $author->id)) selected @endif >
                            {{ $author->name_surname }}
                        </option>
                        @endforeach
                    </select>

                    <label>Označite autore</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('authors') {{ $message }} @enderror
                </div>
            </div>

            <!-- Zanr -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid " j-ttip j-ttip-label='more-option'>
                    <select class="form-select rounded-0" required name="genres[]" size="3" multiple style="height: 98px;">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" 
                            @if (isset($book) && $book->genres->contains('id', $genre->id)) selected @endif
                            >
                            {{ $genre->name }}
                        </option>
                        @endforeach
                    </select>

                    <label>Označite žanr</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('genres') {{ $message }} @enderror
                </div>
            </div>

        </div> <!-- END card -->
    </div> <!-- END col -->

    <div class="col pt-0 pb-3">
        <div class="card p-3">

            <!-- Kategorija -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid" j-ttip j-ttip-label='more-option'>
                    <select class="form-select rounded-0" required name="categories[]" size="3" multiple style="height: 98px;">
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" 
                        @if( isset($book) && $book->categories->contains('id', $categorie->id)) selected @endif
                        >
                            {{ $categorie->name }}
                        </option>
                        @endforeach
                    </select>

                    <label>Označite kategoriju</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('categories') {{ $message }} @enderror
                </div>
            </div>

            <!-- Godina izdanja -->
            <?php $current_y = date('Y');
            $start_y = 1980; ?>
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="year">
                        @for ($i = $current_y; $i >= $start_y; $i--)
                        <option value="{{ $i }}" @if(isset($book) && $book->year === $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>

                    <label>Označite godinu izdanja</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('year') {{ $message }} @enderror
                </div>
            </div>

            <!-- Izdavac -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="publisher_id">
                        @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" @if(isset($book) && $book->publisher_id === $publisher->id) selected @endif >
                            {{ $publisher->name }}
                        </option>
                        @endforeach
                    </select>

                    <label>Označite izdavača</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('publisher_id') {{ $message }} @enderror
                </div>
            </div>

            <!-- Jezik -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="language_id">
                        @foreach ($languages as $lang)
                        <option value="{{ $lang->id }}" @if(isset($book) && $book->language_id === $lang->id) selected @endif >
                            {{ $lang->name }}
                        </option>
                        @endforeach
                    </select>
                    <label>Označite jezik</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('language_id') {{ $message }} @enderror
                </div>
            </div>

            <!-- Pismo -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="letter_id">
                        @foreach ($letters as $letter)
                        <option value="{{ $letter->id }}"@if(isset($book) && $book->letter_id === $letter->id) selected @endif >
                            {{ $letter->name }}
                        </option>
                        @endforeach
                    </select>
                    <label>Označite pismo</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('letter_id') {{ $message }} @enderror
                </div>
            </div>

            <!-- Format -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="format_id">
                        @foreach ($formats as $format)
                        <option value="{{ $format->id }}" @if(isset($book) && $book->format_id === $format->id) selected @endif >
                            {{ $format->name }}
                        </option>
                        @endforeach
                    </select>
                    <label>Označite format</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('format_id') {{ $message }} @enderror
                </div>
            </div>

            <!-- Povez -->
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <select class="form-select rounded-0" name="binding_id">
                        @foreach ($bindings as $binding)
                        <option value="{{ $binding->id }}" @if(isset($book) && $book->binding_id === $binding->id) selected @endif >
                            {{ $binding->name }}
                        </option>
                        @endforeach
                    </select>
                    <label>Označite format</label>
                </div>
                <div class="invalid-feedback mb-3">
                    @error('binding_id') {{ $message }} @enderror
                </div>
            </div>

        </div> <!-- END card -->
    </div> <!-- END col -->
    <div class="py-3 mb-3 w-100 d-flex justify-content-end">
        <button type="reset" class="btn btn-danger rounded-0 w-25 me-1 rounded-start-pill" data-bs-dismiss="modal">Poništi</button>
        <button type="submit" class="btn btn-primary rounded-0 w-25 rounded-end-pill">Sačuvaj</button>
    </div>

</div> <!-- END row -->