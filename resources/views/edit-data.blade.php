<form action="{{ route('update') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf

    <div class="card bg-transparent-black">
        <div class="card-body" size="">

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
                <label for="vorname" class="col-md-4 col-form-label text-md-right">Vorname</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                        </div>
                        <input id="vorname" type="text" class="form-control" name="vorname" style="max-width: 50%"
                               value="{{ old('vorname', auth()->user()->vorname) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nachname" class="col-md-4 col-form-label text-md-right">Nachname</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                        </div>
                        <input id="nachname" type="text" class="form-control" name="nachname" style="max-width: 50%"
                               value="{{ old('nachname', auth()->user()->nachname) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="street" class="col-md-4 col-form-label text-md-right">Straße</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                        </div>
                        <input id="street" type="text" class="form-control" name="street" style="max-width: 50%"
                               value="{{ old('street', auth()->user()->street) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="streetno" class="col-md-4 col-form-label text-md-right">Nr.</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                        </div>
                        <input id="streetno" type="text" class="form-control" name="streetno" style="max-width: 50%"
                               value="{{ old('streetno', auth()->user()->streetno) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="zip" class="col-md-4 col-form-label text-md-right">PLZ</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                        </div>
                        <input id="zip" type="text" class="form-control" name="zip" style="max-width: 50%"
                               value="{{ old('zip', auth()->user()->zip) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="ort" class="col-md-4 col-form-label text-md-right">Ort</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                        </div>
                        <input id="ort" type="text" class="form-control" name="ort" style="max-width: 50%"
                               value="{{ old('ort', auth()->user()->ort) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_email" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>

                        </div>
                        <input id="reg_email" type="text" class="form-control" name="reg_email"
                               style="max-width: 50%"
                               value="{{ old('email', auth()->user()->email) }}" disabled>

                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="telefonnummer" class="col-md-4 col-form-label text-md-right">Telefon</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                        </div>
                        <input id="telefonnummer" type="text" class="form-control" name="telefonnummer"
                               style="max-width: 50%"
                               value="{{ old('telefonnummer', auth()->user()->telefonnummer) }}">

                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Altes Passwort</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                        </div>
                        <input id="current-password" type="password" class="form-control" name="current-password"
                               style="max-width: 50%">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Neues Passwort</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                        </div>
                        <input style="max-width: 50%;border-right: 2px solid #e9ecef;" id="new-password" data-indicator="pwindicator"
                               type="password" class="form-control"
                               name="new-password">
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
                        <input id="photo" type="file" class="form-control" name="photo" style="max-width: 50%">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0 mt-5">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
            </div>
            <div class="form-group row mb-0 mt-5">
                <div class="col-md-8 offset-md-4">

                    <button type="button" class="btn btn-danger" data-toggle="modal"
                            id="open-remove-account-modal-button"
                            data-href="{{route('delete')}}" data-target="#remove-account-modal">
                        Account löschen<i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
            @include('speisekarte-upload')
        </div>
    </div>
</form>


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

