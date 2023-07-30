@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('autori.index') }}">Autori</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $author->name_surname }}</li>
                </ol>
            </nav>
            <h2>Izmijeni podatke</h2>

        </div>
    </div>
    <form class="row" action="{{ route( 'autori.update', [$author->id] ) }}" method="POST">
        @csrf
        @method('PUT')
        @include('autori.forms')
        <div class="py-3 mb-3 w-100 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger rounded-0 w-25 me-1 rounded-start-pill" data-bs-dismiss="modal">Poništi</button>
                    <button type="submit" class="btn btn-primary rounded-0 w-25 rounded-end-pill">Sačuvaj</button>
                </div>
    </form>
    
</div>

@endsection