<!-- Modal -->
<div class="modal fade" id="PublishersDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md">
        <div class="modal-content rounded-0">
            <form action="{{ route('podesavanja.destroy', [''] ) }}" method="POST" j-form>
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h1 class="modal-title fs-6">Obriši stavku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p><h5>Sigurno želite obrisati stavku?</h5></p>
                </div>

               
                <input type="hidden" name="settings_option" value="categories">
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger rounded-0" data-bs-dismiss="modal">Odustani</button>
                    <button type="submit" class="btn btn-primary rounded-0">Obriši</button>
                </div>
            </form>
        </div>
    </div>
</div>
