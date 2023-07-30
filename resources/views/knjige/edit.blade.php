@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('knjige.index') }}">Knjige</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Izmijeni podatke</li>
                </ol>
            </nav>
            <h2>Izmijeni podatke</h2>

        </div>
    </div>
    <form class="row" action="{{ route( 'knjige.update', [$book->id] ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('knjige.forms')
    </form>
</div>

@endsection