@extends('layouts.app')

@section('main')
<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Autori</li>
                </ol>
            </nav>
            <h2>Autori</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <div class="card-header card-header-text">

                    <div class="category d-flex justify-content-end">
                    <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#AuthorCreate">Dodaj novog autora</button>
                    </div>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover table-striped table-bordered j-table j-table-action-btn">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Autor</th>
                                <th>Biografija</th>
                                <th>Akcija</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if(isset($authors) && count($authors))
                                @foreach($authors as $key => $author)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td j-name>{{ $author->name_surname }}</td>
                                        <td j-biography>{{ Str::limit($author->biography, 30, '...') }}</td>
            
                                        <td>
                                            <div class="j-action-btn">
                                            <a href="{{ route('autori.show', [$author->id]) }}" >
                                                    <span class="material-symbols-outlined">visibility</span></a>
                                                <a href="{{ route('autori.edit', [$author->id]) }}">
                                                    <span class="material-symbols-outlined">ink_pen</span></a>

                                                <a href="{{ route('autori.destroy', $author->id ) }}" class="delete" data-bs-toggle="modal" data-bs-target="#Delete">
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
@include('autori.create')
@include('partials.del') 

@endsection
