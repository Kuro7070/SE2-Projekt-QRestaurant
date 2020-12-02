<style>#spinner {
        display: none
    }</style>
<div class="container">
    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data" id="fileU">
        @csrf
        @if(Session::has('upload-success'))
            <div class="alert alert-success w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert">
                <strong>Upload der Speisekarte erfolgreich!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile" onchange="enableUpload()"
                   accept=".pdf">
            <label class="custom-file-label" for="chooseFile">PDF Speisekarte auswählen</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4" onclick="showLoadingSpinner()"
                id="upload">
            Speisekarte hochladen

            <div class="spinner-border spinner-grow-sm" role="status" id="spinner">
                <span class="sr-only">Loading...</span>
            </div>

        </button>
    </form>

    @foreach (\App\Http\Controllers\FileUpload::getPDF() as $codes)

        <div class="row mb-3">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <object class="h-100 w-100" data="{{$codes['path']}}" type="application/pdf"></object>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="qr-container">
                    <a href="{{$codes['path']}}">
                        <img class="w-100" src="{{$codes['qr']}}" alt="QR-Code">
                    </a>
                    <div class="overlay">
                        <a href="{{ action([\App\Http\Controllers\FileUpload::class, 'destroy'], ['id' => $codes['id']])}}">
                            <button type="button" class="btn btn-danger btn-sm">

                                Löschen <i class="fas fa-trash"></i>
                            </button>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-val="{{$codes['id']}}" data-target="#my-modal">
                        </button>


                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>
<div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="my-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
