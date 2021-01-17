<form method="POST" action="{{ route('register') }}">
    <div class="register-body">
        <div class="register-region">
            @csrf
            <div class="register_caption_div">
                <span class="register_caption">
                    Registrieren
                </span>
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Vorname</span>
                </div>
                <input id="vorname" name="vorname" required autofocus autocomplete="vorname" type="text" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nachname</span>
                </div>
                <input id="nachname" name="nachname" required autofocus autocomplete="nachname" type="text" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Straße</span>
                </div>
                <input id="street" name="street" required autofocus autocomplete="street" type="text"
                       class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nr.</span>
                </div>
                <input id="streetno" name="streetno" required autofocus autocomplete="streetno" type="text"
                       class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ort</span>
                </div>
                <input id="ort" name="ort" required autofocus autocomplete="ort" type="text" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">PLZ</span>
                </div>
                <input id="zip" name="zip" required autofocus autocomplete="zip" type="text" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">E-Mail</span>
                </div>
                <input id="reg_email" name="reg_email" required autofocus autocomplete="reg_email" type="email" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telefonnummer</span>
                </div>
                <input id="telefonnummer" name="telefonnummer" required autofocus autocomplete="telefonnummer" type="text" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Passwort</span>
                </div>
                <input id="reg_password" name="reg_password" required autofocus autocomplete="reg_password" type="password"
                       class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 register_input_div">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Passwort bestätigen</span>
                </div>
                <input id="password_confirmation" name="password_confirmation" required autofocus
                       autocomplete="password"
                       type="password" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="nav-link register_already" onclick="openNav()">
                    {{ __('Schon registriert?') }}
                </a>

                <button type="submit" class="btn btn-primary">Registrieren</button>
            </div>
        </div>
    </div>
</form>
