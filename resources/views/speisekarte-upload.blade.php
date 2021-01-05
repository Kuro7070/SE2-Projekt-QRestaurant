<div class="container">
    <form action="upload-file" method="post" id="fileUpload-form">

        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile" onchange="enableUpload()"
                   accept=".pdf">
            <label class="custom-file-label" for="chooseFile" id="chooseFileLabel">PDF Speisekarte auswählen</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4" data-href="{{route('fileUpload')}}" data-token="{{csrf_token()}}" id="fileUpload-submit-button">
            Speisekarte hochladen

            <div class="spinner-border spinner-grow-sm" role="status" id="upload-spinner">
                <span class="sr-only">Loading...</span>
            </div>
            <i class="fas" style="display: none" id="upload-button-status"></i>
        </button>
    </form>

    <div class="position-relative" id="pdfs" style="min-height: 200px">
        @include('pdf-files')
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="my-modal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="my-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12"><div class="modal-text"></div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="remove-pdf-button">
                    Löschen <i class="fas fa-trash-alt"></i>
                    <div class="spinner-border spinner-grow-sm" role="status" id="remove-pdf-spinner">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
            </div>
        </div>
    </div>
</div>


