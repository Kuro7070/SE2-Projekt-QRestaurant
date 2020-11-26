<div id="kontakt" class="col-sm-12 col-md-9 col-lg-6">


    <form method="post" action="contact">
        {{csrf_field()}}
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <img style="filter: invert(1);z-index: 0;height: 75px;position: absolute;left: -5px;mix-blend-mode: difference;opacity: .25;top: -5px; user-select: none;-webkit-user-drag: none"
                         src="../resources/img/qr-code.png" alt="">
                    <h1 style="position: relative" class="font-weight-bold display-2 text-light">Kontakt</h1>
                </div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-6 form-group text-white w-100">
                    <input type="text" class="rounder-borders w-100 form-control-lg @error('Name') is-invalid @enderror"
                           placeholder="Name" name="name" id="name">
                    @error('Name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="col-6 form-group text-white w-100">
                    <input type="text" class="rounder-borders w-100 form-control-lg @error('Email') is-invalid @enderror"
                           placeholder="Email" name="email" id="email">
                    @error('Email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-12">
                    <div class="form-group text-white h-100 pb-3">
                        <textarea style="resize: none"
                                  class="rounder-borders h-100 w-100 form-control-lg textarea @error('Nachricht') is-invalid @enderror"
                                  placeholder="Nachricht" name="message" id="message"></textarea>
                        @error('Nachricht')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row justify-content-end pr-3">
                <button type="submit" class="btn border-0 bg-button-color">Nachricht senden
                </button>
            </div>
        </div>
    </form>
</div>
