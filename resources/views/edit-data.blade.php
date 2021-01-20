@csrf
<div id="display_profile">
    <div class="body_div">
        <div class="displayarea">
            <div class="box">
                <div class="toprowspaceholder"></div>
                <div class="toprow">
                    <div class="colleft">
                        <div class="header_div">
                            <H1 class="profil_text"> Profil</H1>
                        </div>

                        <div class="name_div">
                            <span>{{ old('vorname', auth()->user()->vorname). ' ' .old('nachname', auth()->user()->nachname) }}</span>

                        </div>

                        <div class="email_div">
                            <span>{{ old('email', auth()->user()->email) }}</span>
                        </div>
                    </div>

                    <div class="colright">
                        <img class="rounded profile-picture picture_div"
                             src="{{\App\Http\Controllers\UserController::getProfilePic()}}">

                        <div class="profil_bearbeiten_div">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                Profil Bearbeiten
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bottmomrow">
                    @include('speisekarte-upload')
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                @include('profil-bearbeiten')
            </div>
        </div>
    </div>

</div>


