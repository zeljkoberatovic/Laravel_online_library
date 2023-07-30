@extends('layouts.app')

@section('main')

<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('knjige.index') }}">Knjige</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nova knjiga</li>
                </ol>
            </nav>
            <h2>Nova knjiga</h2>

        </div>
    </div>
    <form class="row" action="{{ route('knjige.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('knjige.forms')
    </form>
</div>

@endsection