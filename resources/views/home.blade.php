<div id="home" class="col-sm-12 col-md-9 col-lg-6">

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Kontaktloser Bestellprozess</h2>
            {{--                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
            <p class="card-text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet.

                @for ($i = 0; $i < 5; $i++)
                    <br>{{$i}}. Hallo Welt!
                @endfor
            </p>

            <div class="row">
                <div class="col-6">
                    <a href="{{ url('login') }}">
                        <button type="button" style="width: 100%" class="btn btn-outline-success">Login</button>
                    </a>
                    <p class="text-muted">Bereits registriert?</p>
                </div>
                <div class="col-6">
                    <a href="{{ url('register') }}">
                        <button type="button" style="width: 100%" class="btn btn-primary">Registrieren</button>
                    </a>
                    <p class="text-muted">Lorem ipsum dolor sit amet?</p>
                </div>
            </div>

        </div>
    </div>
</div>
