<div class="container" id="loginbereich">
    <a href="javascript:void(0)" class="closebtn" onclick="openNav()">&times;</a>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label class="emailCaption"
                   for="email">
                Email
            </label>
            <input id="email"  type="email" name="email" :value="old('email')" required autofocus/>
        </div>

        <div class="mt-4">
            <label id="passwordCaption" for="password">Passwort</label>
            <input id="password"  type="password" name="password" required
                   autocomplete="current-password"/>
        </div>

        <div class="block mt-4" id="block1">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="form-control" name="remember">
                <span id="remebermetext" class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">


            <button id="loginbttn" class="justify-content-center">
               <label class="align-self-center">Login</label>
            </button>
            @if (Route::has('password.request'))
                <a id="forgotten" class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
