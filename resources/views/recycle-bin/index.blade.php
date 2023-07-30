@extends('layouts.app')

@section('main')
<div class="main-content">
    <div class="row">
        <div class="col pt-0 pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb j-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Kontrolna tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Korpa</li>
                </ol>
            </nav>
            <h2>Korpa za otpatke</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <div class="card-header card-header-text">

                    <div class="category d-flex justify-content-end">
                        <button type="button" class="btn btn-primary rounded-pill">Isprazni korpu</button>
                    </div>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover table-striped table-bordered j-table j-table-action-btn action-btn-2">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Ime</th>
                                <th>Lokacija</th>
                                <th>Datum brisanja</th>
                                <th>Poslednja izmjena</th>
                                <th>Akcija</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if(isset($items))
                                @foreach($items as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>Lokacija</td>
                                        <td>{{ $item->deleted_at->format('d-m-Y H:i:s') }}</td>
                                        <td>27-07-2023 10:55:12</td>
                                        <td>
                                            <div class="j-action-btn">
                                                <a class="j-btn-restore" href="{{ route('recycle-bin.restore', [$item->id]) }}" data-id='{{ $item->id }}' data-j-recycle-bin-restore><span
                                                    class="material-symbols-outlined">recycling</span></a>
                                                <a class="j-btn-delete" href="javascript:void(0)" data-id='{{ $item->id }}' data-j-recycle-bin-empty><span
                                                    class="material-symbols-outlined">delete_forever</span></a>
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

@include('recycle-bin.del')
@endsection
