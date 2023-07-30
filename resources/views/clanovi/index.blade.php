@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Članovi</li>
                </ol>
            </nav>
            <h2>Članovi</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col d-flex justify-content-center"><img src="{{ Vite::asset('resources/img/page-under-construction-icon.jpg') }}" class="img-fluid" /></div>
    </div>


</div>

@endsection