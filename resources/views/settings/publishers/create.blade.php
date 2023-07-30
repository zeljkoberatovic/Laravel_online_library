<!-- Modal -->
<div class="modal fade" id="PublishersCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-0">
            <form action="{{ route('podesavanja.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Novi izdavač</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @include('settings.publishers.form')
                <input type="hidden" name="settings_option" value="publishers">
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger rounded-0" data-bs-dismiss="modal">Odustani</button>
                    <button type="submit" class="btn btn-primary rounded-0">Sačuvaj</button>
                </div>
            </form>
        </div>
    </div>
</div>
