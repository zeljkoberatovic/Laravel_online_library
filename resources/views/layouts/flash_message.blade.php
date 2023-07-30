<div class="mx-auto w-75 mt-5 pt-4">
    @if(session('msg_info'))
        <div class="alert alert-info alert-dismissible fade show rounded-0" role="alert">
            {{ session('msg_info') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('msg_success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0" role="alert">
            {{ session('msg_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('msg_warning'))
        <div class="alert alert-warning alert-dismissible fade show rounded-0" role="alert">
            {{ session('msg_warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('msg_danger'))
        <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
            {{ session('msg_danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>