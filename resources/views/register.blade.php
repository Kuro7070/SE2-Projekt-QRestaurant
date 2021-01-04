<form method="POST" action="{{ route('register') }}">
    @csrf

    <?php
    use LasseRafn\InitialAvatarGenerator\InitialAvatar;
    $avatar = new InitialAvatar();

    echo $avatar->name('Sahin')->generateSvg()->toXMLString();

    ?>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        </div>
        <input id="name" name="name" required autofocus autocomplete="name"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">E-Mail</span>
        </div>
        <input id="email" name="email" required autofocus autocomplete="email"  type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
        </div>
        <input id="password" name="password" required autofocus autocomplete="password"  type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Password bestätigen</span>
        </div>
        <input id="password_confirmation" name="password_confirmation" required autofocus autocomplete="password"  type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <button type="submit" class="btn btn-primary">Registrieren</button>
    </div>
</form>
