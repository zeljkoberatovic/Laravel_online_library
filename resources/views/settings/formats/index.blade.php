<div class="card-header card-header-text">
    <div class="category d-flex justify-content-start">
        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#FormatsCreate">Dodaj novi format</button>
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
        @if(isset($formats) && count($formats))
            @foreach($formats as $key => $format)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $format['name'] }}</td>
                <td>{{ $format['description'] }}</td>
                <td>
                <div class="j-action-btn">
                <form action="{{ route('podesavanja.show', [$format->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="settings_option" value="formats">
                                    <button type="submit" class="material-symbols-outlined">visibility</button>
                                </form>
                                

                                <form action="{{ route('podesavanja.edit', [$format->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="settings_option" value="formats">
                                    <button type="submit" class="material-symbols-outlined j-edit-icon">ink_pen</button>
                                </form>
                                <a href="{{ route('podesavanja.destroy', $format->id ) }}?option=formats" class="delete" data-bs-toggle="modal" data-bs-target="#Delete">
                                                    <span class="material-symbols-outlined">delete</span></a>                    </div>

                </td>
            </tr>
            @endforeach            
            @endif

        </tbody>
    </table>
</div>