@extends('layouts.app')

@section('main')
<div class="main-content">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-4 g-4 mb-4">
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-info">
                        <span class="material-symbols-outlined">box_add</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Nove knjige</strong></p>
                    <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i>
                        <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-success">
                        <span class="material-symbols-outlined">order_approve</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Izdate knjige</strong></p>
                    <h3 class="card-title">24</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i>
                        <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-success">
                        <span class="material-symbols-outlined">done_all</span>

                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Vraćene knjige</strong></p>
                    <h3 class="card-title">7</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i> <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-warning">
                        <span class="material-symbols-outlined">checklist</span>

                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Aktivne rezervacije</strong></p>
                    <h3 class="card-title">15</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i> <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-red">
                        <span class="material-symbols-outlined">quiz</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Knjige u prekoračenju</strong></p>
                    <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i>
                        <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-info">
                        <span class="material-symbols-outlined">monitoring</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Ukupno knjiga</strong></p>
                    <h3 class="card-title">153</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i> <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-warning">
                        <span class="material-symbols-outlined">star</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Recenzije</strong></p>
                    <h3 class="card-title">13</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i> <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 card-stats">
                <div class="card-header">
                    <div class="icon icon-info">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Ukupno članova</strong></p>
                    <h3 class="card-title">153</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-symbols-outlined text-info">info</i> <a href="#" class="text-muted">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-lg-7 col-md-12 mb-3 mb-lg-0">
            <div class="card">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Najnovije knjige</h4>
                    <p class="category">Knjige nabavljene u prethodnih dva mjeseca</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Naziv</th>
                                <th>Autor</th>
                                <th>Kategorija</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Knjiga 1</td>
                                <td>Autor 1</td>
                                <td>Romani</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Knjiga 2</td>
                                <td>Autor 2</td>
                                <td>Romani</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 mb-4 mb-lg-3">
            <div class="card">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Aktivnosti</h4>
                </div>
                <div class="card-content">
                    <div class="streamline">
                        <div class="sl-item sl-primary">
                            <div class="sl-content">
                                <small class="text-muted">Prije 5 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                        <div class="sl-item sl-danger">
                            <div class="sl-content">
                                <small class="text-muted">Prije 25 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                        <div class="sl-item sl-success">
                            <div class="sl-content">
                                <small class="text-muted">Prije 40 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-content">
                                <small class="text-muted">Prije 45 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                        <div class="sl-item sl-warning">
                            <div class="sl-content">
                                <small class="text-muted">Prije 55 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-content">
                                <small class="text-muted">Prije 60 min.</small>
                                <p>-Test..................</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-7 col-md-12 mb-3 mb-lg-0">
            <div class="card">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Recenzije</h4>
                    <p class="category">Najbolje ocijenjene knjige</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Naziv</th>
                                <th>Autor</th>
                                <th>Kategorija</th>
                                <th>Ocjena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Knjiga 1</td>
                                <td>Autor 1</td>
                                <td>Romani</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Knjiga 2</td>
                                <td>Autor 2</td>
                                <td>Romani</td>
                                <td>3.7</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

