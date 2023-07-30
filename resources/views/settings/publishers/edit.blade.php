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
            <h2>Ažuriraj</h2>
        </div>
    </div>
    <div class="row mb-5 p-3 j-border-ouline-dashed">
        <div class="col col-md-6">
            <form action="{{ route('podesavanja.update', [$publisher->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('settings.publishers.form')
                <input type="hidden" name="settings_option" value="publishers">
                <div class="py-3 mb-3 w-100 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger rounded-0 w-25 me-1 rounded-start-pill" data-bs-dismiss="modal">Poništi</button>
                    <button type="submit" class="btn btn-primary rounded-0 w-25 rounded-end-pill">Sačuvaj</button>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection