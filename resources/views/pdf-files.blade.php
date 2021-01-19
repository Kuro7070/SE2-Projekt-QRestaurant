@foreach (\App\Http\Controllers\FileUpload::getPDF() as $codes)

    <div class="row mb-3">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <object class="h-100 w-100" data="{{$codes['path']}}" type="application/pdf"></object>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="qr-container">
                <a href="{{$codes['href']}}" target="_blank">
                    <img class="w-100" src="{{$codes['qr']}}" alt="QR-Code">
                </a>
                <div class="overlay">
                    <button type="button" class="btn btn-danger" data-toggle="modal" id="open-remove-pdf-modal-button"
                            data-href="{{route('removePDF', ['id' => $codes['id']])}}" data-id="{{$codes['id']}}" data-name="{{$codes['name']}}" data-path="{{$codes['path']}}" data-target="#my-modal">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endforeach

<div id="pdfs-backdrop" class="row m-auto position-absolute bg-transparent-black h-100 w-100 align-content-center justify-content-center" style="top:0">
    <div class="spinner-border" role="status" style="width: 10rem; height: 10rem;">
        <span class="sr-only">Loading...</span>
    </div>
</div>
