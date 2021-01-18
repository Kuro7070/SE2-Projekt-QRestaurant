<form action="{{ route('update') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Vorname</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                </div>
                <input id="vorname" type="text" class="form-control" name="vorname"
                       value="{{ old('vorname', auth()->user()->vorname) }}">
            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nachname</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                </div>
                <input id="nachname" type="text" class="form-control" name="nachname"
                       value="{{ old('nachname', auth()->user()->nachname) }}">

            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Straße</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                </div>
                <input id="street" type="text" class="form-control" name="street"
                       value="{{ old('street', auth()->user()->street) }}">

            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nr.</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                </div>
                <input id="streetno" type="text" class="form-control" name="streetno"
                       value="{{ old('streetno', auth()->user()->streetno) }}">

            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Ort</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                </div>
                <input id="ort" type="text" class="form-control" name="ort"
                       value="{{ old('ort', auth()->user()->ort) }}">

            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">PLZ</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                </div>
                <input id="zip" type="text" class="form-control" name="zip"
                       value="{{ old('zip', auth()->user()->zip) }}">

            </div>
        </div>
    </div>
    <div class="form-group row text-white">
        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>

                </div>
                <input id="email" type="text" class="form-control" name="email"
                       value="{{ old('reg_email', auth()->user()->reg_email) }}" disabled>

            </div>

        </div>
    </div>
    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Telefon</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                </div>
                <input id="telefonnummer" type="text" class="form-control" name="telefonnummer"
                       value="{{ old('telefonnummer', auth()->user()->telefonnummer) }}">

            </div>
        </div>
    </div>

    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Altes Passwort</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                </div>
                <input id="current-password" type="password" class="form-control" name="current-password">
            </div>
        </div>
    </div>

    <div class="form-group row text-white">
        <label for="name" class="col-md-4 col-form-label text-md-right">Neues Passwort</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                </div>
                <input style="border-right: 2px solid #e9ecef;" id="new-password" data-indicator="pwindicator"
                       type="password" class="form-control"
                       name="new-password">

                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                </div>
                <input style="border-left: 2px solid #e9ecef;" id="new-password-confirm" type="password"
                       class="form-control" name="new-password-confirm">

                <div class="input-group-append">

                    <span class="input-group-text" id="pwindicator">
                        <div class="status"></div>
                    </span>

                    <span class="input-group-text" id="pw-confirm">

                    </span>

                </div>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <div class="photo-container">
            <img class="rounded profile-picture"
                 src="{{\App\Http\Controllers\UserController::getProfilePic()}}">
            <div class="overlay">
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profilbild</label>
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-image"></i>
                    </span>

                </div>
                <input id="photo" type="file" class="form-control" name="photo">
            </div>
        </div>
    </div>
    <div class="form-group row mb-0 mt-5">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Speichern</button>
        </div>
    </div>
</form>
<div class="form-group row mb-0 mt-5">
    <div class="col-md-8 offset-md-4">

        <button type="button" class="btn btn-danger" data-toggle="modal" id="open-remove-account-modal-button"
                data-href="{{route('delete')}}" data-target="#remove-account-modal">
            Account löschen<i class="fas fa-trash-alt"></i>
        </button>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="remove-account-modal" tabindex="-1" role="dialog" data-backdrop="static"
     aria-labelledby="my-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="modal-text"></div>
                </div>
            </div>
            <div class="modal-footer">

                <form action="{{ route('delete') }}" method="POST" role="form">
                    @csrf
                    <button type="submit" class="btn btn-danger" id="remove-account-button">
						<i class="fas fa-trash-alt"></i>
                        Löschen
                        <div class="spinner-border spinner-grow-sm" role="status" id="remove-account-spinner">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
            </div>
        </div>
    </div>
</div>
