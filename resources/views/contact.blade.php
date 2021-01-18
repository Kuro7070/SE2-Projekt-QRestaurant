<div id="kontakt" class="col-sm-12 col-md-9 col-lg-6">

    <div class="card bg-transparent-black">
        <div class="card-body">
            <form method="post" action="contact" id="contact-form">

                <div class="container">
                    <div class="row mb-3">
                        <div class="col-12">
                            <img style="filter: invert(1);z-index: 0;height: 75px;position: absolute;left: -5px;mix-blend-mode: difference;opacity: .25;top: -5px; user-select: none;-webkit-user-drag: none"
                                 src="{{\App\Http\Controllers\QrCodeGenerator::generateQRCode('kontakt', 255)}}" alt="">
                            <h1 style="position: relative" class="font-weight-bold display-2 text-light">Kontakt</h1>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="rounder-borders w-100 form-control-lg"
                                       placeholder="Name" name="contact_name" id="contact_name" @auth readonly="readonly" value="{{ old('name', auth()->user()->name) }}" @endif>
                                <span class="invalid-feedback" role="alert"><strong id="errors-contact_name"></strong></span>
                            </div>


                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="rounder-borders w-100 form-control-lg"
                                       placeholder="Email" name="contact_email" id="contact_email" @auth readonly="readonly" value="{{ old('name', auth()->user()->email) }}" @endif>
                                <span class="invalid-feedback" role="alert"><strong id="errors-contact_email"></strong></span>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-12">
                            <div class="form-group text-white h-100 w-100 pb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    </div>
                                    <textarea style="resize: none"
                                              class="rounder-borders h-100 w-100 form-control-lg textarea"
                                              placeholder="Nachricht" name="contact_nachricht" id="contact_nachricht"></textarea>
                                    <span class="invalid-feedback" role="alert"><strong
                                                id="errors-contact_nachricht"></strong></span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-end pr-3">
                        <button type="submit" class="btn border-0 bg-button-color" data-href="{{route('kontakt')}}"
                                data-token="{{csrf_token()}}" id="contact-submit-button">
                            Nachricht senden
                            <div class="spinner-border spinner-grow-sm" role="status" id="contact-spinner">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <i class="fas" style="display: none" id="contact-button-status"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
