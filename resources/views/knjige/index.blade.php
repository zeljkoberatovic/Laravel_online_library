@extends('layouts.app')

@section('main')
<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Knjige</li>
                </ol>
            </nav>
            <h2>Knjige</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <div class="card-header card-header-text">

                    <div class="category d-flex justify-content-end">
                        <a href="{{ route('knjige.create') }}" class="btn btn-primary rounded-pill">Dodaj novu knjigu</a>
                    </div>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover table-striped table-bordered j-table j-table-action-btn">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Naziv</th>
                                <th>Autor</th>
                                <th>Žanr</th>
                                <th>Kategorija</th>
                                <th>Godina izdanja</th>
                                <th>Kratak opis</th>
                                <th>Akcija</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(isset($books) && count($books))
                                @foreach($books as $key => $book)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>
                                            @foreach($book->authors as $author)
                                                {{ $author->name_surname }}
                                                @unless($loop->last) , @endunless
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($book->genres as $genre)
                                                {{ $genre->name }}
                                                @unless($loop->last) , @endunless
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($book->categories as $categorie)
                                                {{ $categorie->name }}
                                                @unless($loop->last) , @endunless
                                            @endforeach
                                        </td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ Str::limit($book->description, 20, '...') }}</td>
                                        <td>
                                            <div class="j-action-btn">
                                                <a href="{{ route('knjige.show', [$book->id]) }}" >
                                                    <span class="material-symbols-outlined">visibility</span></a>
                                                <a href="{{ route('knjige.edit', [$book->id]) }}">
                                                    <span class="material-symbols-outlined">ink_pen</span></a>
                                                
                                                <a href="{{ route('knjige.destroy', $book->id ) }}" class="delete" data-bs-toggle="modal" data-bs-target="#Delete">
                                                    <span class="material-symbols-outlined">delete</span></a>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.del');
@endsection
