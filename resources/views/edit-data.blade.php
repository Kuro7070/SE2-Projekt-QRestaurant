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
                            <span>
                                Max Mustermann
                            </span>
                        </div>

                        <div class="email_div">
                            <span>
                                max.mustermann@mail.com
                            </span>
                        </div>
                    </div>

                    <div class="colright">
                        <div class="picture_div">

                        </div>

                        <div class="profil_bearbeiten_div">
                            <a>
                                Profil Bearbeiten
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bottmomrow">
                    @include('speisekarte-upload')
                </div>
            </div>
        </div>
    </div>

</div>

