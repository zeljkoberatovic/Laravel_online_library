@extends('layouts.app')

@section('main')
<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
         <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Podešavanja</li>
                </ol>
            </nav>
            <h2>Podešavanja</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <div class="card p-3">
                <nav>
                    <div class="nav nav-tabs j-reset-form-action" id="nav-tab" role="tablist">
                        <button class="nav-link @if( request()->get('option') && request()->get('option') == 'categories' || 
                                                     request()->get('option') == null) active @endif rounded-0" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-categories" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Kategorije</button>
                        <button class="nav-link rounded-0 @if( request()->get('option') && request()->get('option') == 'genres') active @endif" data-bs-toggle="tab" data-bs-target="#nav-genres"
                            type="button" role="tab" aria-selected="false">Žanrovi</button>
                        <button class="nav-link rounded-0 @if( request()->get('option') && request()->get('option') == 'publishers') active @endif" data-bs-toggle="tab" data-bs-target="#nav-publishers"
                            type="button" role="tab" aria-selected="false">Izdavači</button>
                        <button class="nav-link rounded-0 @if( request()->get('option') && request()->get('option') == 'bindings') active @endif" data-bs-toggle="tab"
                            data-bs-target="#nav-bindings" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Povez</button>
                        <button class="nav-link  @if( request()->get('option') && request()->get('option') == 'formats') active @endif rounded-0" data-bs-toggle="tab" data-bs-target="#nav-formats"
                            type="button" role="tab" aria-selected="false">Format</button>
                        <button class="nav-link rounded-0  @if( request()->get('option') && request()->get('option') == 'letters') active @endif" data-bs-toggle="tab" data-bs-target="#nav-letters"
                            type="button" role="tab" aria-selected="false">Pismo</button>
                        
                    </div>
                </nav>
                <div class="tab-content pt-3" id="nav-tabContent">
                    <div class="tab-pane fade @if( request()->get('option') && request()->get('option') == 'categories' || 
                                                    request()->get('option') == null ) active show @endif" 
                        id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab"
                        tabindex="0"> @include('settings.categories.index') @include('settings.categories.create')</div>
                    <div class="tab-pane fade @if( request()->get('option') && request()->get('option') == 'genres' ) active show @endif" id="nav-genres" role="tabpanel" aria-labelledby="nav-genres-tab"
                        tabindex="0"> @include('settings.genres.index') @include('settings.genres.create')</div>
                    <div class="tab-pane fade @if( request()->get('option') && request()->get('option') == 'publishers' ) active show @endif" id="nav-publishers" role="tabpanel" aria-labelledby="nav-publishers-tab"
                        tabindex="0"> @include('settings.publishers.index') @include('settings.publishers.create')</div>
                    <div class="tab-pane fade  @if( request()->get('option') && request()->get('option') == 'bindings' ) active show @endif " id="nav-bindings" role="tabpanel" aria-labelledby="nav-letters-tab"
                        tabindex="0"> @include('settings.bindings.index') @include('settings.bindings.create')</div>
                    <div class="tab-pane fade  @if( request()->get('option') && request()->get('option') == 'formats' ) active show @endif " id="nav-formats" role="tabpanel" aria-labelledby="nav-letters-tab"
                        tabindex="0"> @include('settings.formats.index') @include('settings.formats.create')</div>
                    <div class="tab-pane fade  @if( request()->get('option') && request()->get('option') == 'letters' ) active show @endif " id="nav-letters" role="tabpanel" aria-labelledby="nav-letters-tab"
                        tabindex="0"> @include('settings.letters.index') @include('settings.letters.create')</div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.del')
@endsection
