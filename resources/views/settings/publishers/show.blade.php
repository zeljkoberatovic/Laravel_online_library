@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('podesavanja.index') }}">Podešavanja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Izdavači</li>
                </ol>
            </nav>
            <h2>Izdavači</h2>
        </div>
    </div>
    <div class="row mb-5 p-3 j-border-ouline-dashed">
        <div class="col-12 col-md-7 col-lg-8"> 
            <div class="row">
                <div class="col-12 col-md-6 pb-4 d-flex flex-column j-border-right-dashed">  
                    <p class=" fs-6 text-danger mb-2 pb-2 j-border-bottom-dashed">Naziv</p>
                    <span class="fw-semibold fs-5" style="overflow-wrap: break-word;">{{$data->name}}</span>
                </div>

                <div class="col-12 col-md-6 pb-4 pe-4 j-border-right-dashed"> 
                    <p class=" fs-6 text-danger mb-2 pb-2 j-border-bottom-dashed">Kratak opis</p>
                    <span class="fw-semibold fs-5" style="overflow-wrap: break-word;">{{$data->description}}</span>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4">  
        <?php 
            $img_path = "resources/img/" . $data->img_path;
            if($data->img_path !== null) { $img_path = "resources/img/knjige/" . $data->img_path; } ?>
            <img width="300" src="{{ Vite::asset($img_path) }}" class="img-fluid" />
        </div>
    </div>
    <div class="py-3 mb-3 w-100 d-flex justify-content-center">
        <a href = "{{ url()->previous() }}" class="btn btn-secondary rounded-0 w-25 me-1 rounded-start-pill">Nazad</a>
        <a href = "{{ route('podesavanja.edit', [$data->id]) }}?option=publishers" class="btn btn-primary rounded-0 w-25 rounded-end-pill">Izmijeni</a>
    </div>

</div>

@endsection