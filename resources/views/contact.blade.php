<style>#contact-spinner {
        display: none
    }</style>
<div id="kontakt" class="col-sm-12 col-md-9 col-lg-6">


    <form method="post" action="contact" id="contact-form">
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
                    <input type="text" class="rounder-borders w-100 form-control-lg"
                           placeholder="Name" name="name" id="name">
                    <span class="invalid-feedback" role="alert"><strong id="errors-name"></strong></span>

                </div>
                <div class="col-6 form-group text-white w-100">
                    <input type="text" class="rounder-borders w-100 form-control-lg"
                           placeholder="Email" name="email" id="email">
                    <span class="invalid-feedback" role="alert"><strong id="errors-email"></strong></span>
                </div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-12">
                    <div class="form-group text-white h-100 pb-3">
                        <textarea style="resize: none"
                                  class="rounder-borders h-100 w-100 form-control-lg textarea"
                                  placeholder="Nachricht" name="nachricht" id="nachricht"></textarea>
                        <span class="invalid-feedback" role="alert"><strong id="errors-nachricht"></strong></span>
                    </div>
                </div>

            </div>
            <div class="row justify-content-end pr-3">
                <button type="submit" class="btn border-0 bg-button-color">
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
