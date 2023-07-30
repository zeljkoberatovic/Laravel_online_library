<div class="card-header card-header-text">
    <div class="category d-flex justify-content-start">
        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#LettersCreate">Dodaj novo pismo</button>
    </div>
</div>
<div class="card-content table-responsive px-0">
    <table class="table table-hover table-striped table-bordered j-table j-table-action-btn">
        <thead class="text-primary">
            <tr>
                <th>#</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Akcija</th>
            </tr>
        </thead>
        <tbody>
        @if(isset($letters) && count($letters))
            @foreach($letters as $key => $letter)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $letter['name'] }}</td>
                <td>{{ $letter['description'] }}</td>
                <td>
                    <div class="j-action-btn">
                    <form action="{{ route('podesavanja.show', [$letter->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="settings_option" value="letters">
                                    <button type="submit" class="material-symbols-outlined">visibility</button>
                                </form>
                                

                                <form action="{{ route('podesavanja.edit', [$letter->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="settings_option" value="letters">
                                    <button type="submit" class="material-symbols-outlined j-edit-icon">ink_pen</button>
                                </form>
                                <a href="{{ route('podesavanja.destroy', $letter->id ) }}?option=letters" class="delete" data-bs-toggle="modal" data-bs-target="#Delete">
                                                    <span class="material-symbols-outlined">delete</span></a>                    </div>

                </td>
            </tr>
            @endforeach            
            @endif

        </tbody>
    </table>
</div>