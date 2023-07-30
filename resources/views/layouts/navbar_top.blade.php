
<div class="top-navbar align-items-center">
    <nav class="navbar navbar-expand-lg align-items-center">
        <div class="container-fluid align-items-center">

            <button type="button" id="sidebarCollapse" class="d-none d-lg-flex">
                <span class="material-symbols-outlined">menu</span>
            </button>

            <a class="navbar-brand d-block d-lg-none" href="#"><img src="{{ asset('assets/logo.svg') }}" class="img-fluid bg-white rounded-5" width="32" height="32" /><span class="ms-2 text-white fs-6">Biblioteka</span></a>

            <div class="input-group flex-nowrap j-width-40 top-search d-none d-md-flex j-form hint--bottom hint--bounce" aria-label="Pretraga(naslov knjige, žanr ili ime autora)">
                <input type="text" class="form-control rounded-0 border-0 rounded-start-pill text-white j-bg-white-30 placeholder-gray-200 " placeholder="Pretraga(naslov knjige, žanr ili ime autora)" aria-describedby="addon-wrapping" >
                <span class="input-group-text rounded-0 border-0 rounded-end-pill bg-info text-white" id="addon-wrapping"><span class="material-symbols-outlined">search</span></span>
            </div>

            <div id="navbarActionIcons">
                <a href="#" class="nav-link active" data-toggle="dropdown">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification">17</span>
                </a>

                <a class="nav-link hint--bottom hint--bounce" href="{{ url('/podesavanja') }}" aria-label="Podešavanja">
                    <span class="material-symbols-outlined">settings</span>
                </a>

                <a class="nav-link hint--bottom-left hint--bounce" href="#" aria-label="Registracija | Prijava">
                    <span class="material-symbols-outlined">account_circle</span>
                </a>

                <a class="nav-link d-lg-none more-button" type="button" data-toggle="collapse" data-target="#navbarActionIcons" aria-controls="navbarActionIcons" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-symbols-outlined">menu</span>
                </a>
            </div>
        </div>
    </nav>
</div>