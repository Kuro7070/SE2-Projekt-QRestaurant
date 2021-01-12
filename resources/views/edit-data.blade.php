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
                <label for="name" class="col-md-4 col-form-label text-md-right">Vorname</label>
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
                <label for="Nachname" class="col-md-4 col-form-label text-md-right">Nachname</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>

                        </div>
                        <input id="Nachname" type="text" class="form-control" name="Nachname" style="max-width: 50%"
                               value="{{ old('Nachname', auth()->user()->Nachname) }}">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Straße</label>
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
                <label for="name" class="col-md-4 col-form-label text-md-right">Nr.</label>
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
                <label for="name" class="col-md-4 col-form-label text-md-right">PLZ</label>
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
                <label for="name" class="col-md-4 col-form-label text-md-right">Ort</label>
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
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>

                        </div>
                        <input id="email" type="text" class="form-control" name="email"
                               style="color:white; max-width: 50%"
                               value="{{ old('email', auth()->user()->email) }}" disabled>

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
                        <input style="border-right: 2px solid #e9ecef;" id="new-password" data-indicator="pwindicator"
                               type="password" class="form-control" style="max-width: 50%"
                               name="new-password">

                        <div class="input-group-prepend">

                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>

                        </div>
                        <input style="border-left: 2px solid #e9ecef;" id="new-password-confirm" type="password"
                               class="form-control" name="new-password-confirm" style="max-width: 50%">

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

            @include('speisekarte-upload')
        </div>
    </div>
</form>
