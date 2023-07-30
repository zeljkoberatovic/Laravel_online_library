@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('knjige.index') }}">Knjige</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
                </ol>
            </nav>
            <h2>Knjige</h2>
        </div>
    </div>
    <div class="row mb-5 p-3 j-border-ouline-dashed">
        <div class="col-12 col-md-7 col-lg-8"> 
            <div class="row">
                <div class="col-12 col-md-6 pb-4 d-flex justify-content-center">  
                    <?php $img_path = "resources/img/knjige/" . $book->img_path; ?>
                    <img width="300" src="{{ Vite::asset($img_path) }}" class="img-fluid" />
                </div>
                <div class="col-12 col-md-6 pb-4 pe-4 j-border-right-dashed"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        @foreach ($book->categories as $categorie)
                            <span class=" text-danger fs-6 "> {{ $categorie->name }}</span>
                                @unless($loop->last)
                                    ,
                                @endunless
                            @endforeach
                        </li>
                        <li class="list-group-item fs-4 fw-semibold">{{ $book->title }}</li>
                        <li class="list-group-item"><span class="fw-semibold fs-6 text-black"> Autor: 
                            @foreach ($book->authors as $author)
                            <span class="fw-semibold fs-6 text-danger"> {{ $author->name_surname }}</span>
                                @unless($loop->last)
                                    ,
                                @endunless
                            @endforeach
                        </li>
                        <li class="list-group-item"><span class="fs-6">Broj strana: &nbsp; </span>
                            <span class="fw-semibold fs-6">{{$book->page_count}}</span> 
                        </li>
                        <li class="list-group-item"><span class="fs-6">ISBN: &nbsp; </span>
                            <span class="fw-semibold fs-6">{{$book->isbn}}</span> 
                        </li>
                        <li class="list-group-item"><span class="fs-6">Izdavač: &nbsp; </span>
                            <span class="fw-semibold fs-6">{{$book->publisher->name}}</span>
                        </li>
                        <li class="list-group-item"><span class="fs-6 ">Godina izdanja: &nbsp; </span>
                            <span class="fw-semibold fs-6">{{$book->year}}</span> 
                        </li>
                        <li class="list-group-item"><span class="fs-6"> Žanr: &nbsp; </span>
                            @foreach ($book->genres as $genre)
                            <span class="fw-semibold fs-6 "> {{ $genre->name }}</span>
                                @unless($loop->last)
                                    ,
                                @endunless
                            @endforeach
                        </li>
                    </ul>
                </div>
                
                <div class="col-12 pt-4 j-border-top-dashed j-border-right-dashed "> 
                    <div class="w-100">
                        <p class="fw-semibold fs-4">Kratak opis</p>
                        <span class="fs-6" style="overflow-wrap: break-word;">{{$book->description}}</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4">  </div>
    </div>

    <div class="py-3 mb-3 w-100 d-flex justify-content-center">
        <a href = "{{ url()->previous() }}" class="btn btn-secondary rounded-0 w-25 me-1 rounded-start-pill">Nazad</a>
        <a href = "{{ route('knjige.edit', [$book->id]) }}" class="btn btn-primary rounded-0 w-25 rounded-end-pill">Izmijeni</a>
    </div>
</div>

@endsection