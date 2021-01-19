<div id="corona" class="w-100">

    <div class="card">
        <button class="btn btn-primary m-0 w-100" type="button" data-toggle="collapse" data-target="#collapseCorona"
                aria-expanded="false" aria-controls="collapseCorona">
            <i class="fas fa-virus"></i>
            Jetzt Corona-Kontaktdaten digital hinterlegen!
        </button>
        <div class="collapse" id="collapseCorona">
            <div class="card-body">
                <form method="post" action="covid" id="customer-form">
					@csrf
					<div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Vorname</span>
                                    </div>
                                    <input id="customer_vorname" name="customer_vorname" required autofocus
                                           autocomplete="customer_vorname" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Nachname</span>
                                    </div>
                                    <input id="customer_nachname" name="customer_nachname" required autofocus
                                           autocomplete="customer_nachname" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Straße</span>
                                    </div>
                                    <input id="customer_street" name="customer_street" required autofocus
                                           autocomplete="customer_street" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Hausnr.</span>
                                    </div>
                                    <input id="customer_streetno" name="customer_streetno" required autofocus
                                           autocomplete="customer_streetno" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Ort</span>
                                    </div>
                                    <input id="customer_ort" name="customer_ort" required autofocus
                                           autocomplete="customer_ort" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">PLZ</span>
                                    </div>
                                    <input id="customer_zip" name="customer_zip" required autofocus
                                           autocomplete="customer_zip" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">E-Mail</span>
                                    </div>
                                    <input id="customer_email" name="customer_email" required autofocus
                                           autocomplete="customer_email" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Telefon</span>
                                    </div>
                                    <input id="customer_telefonnummer" name="customer_telefonnummer" required autofocus
                                           autocomplete="customer_telefonnummer" type="text"
                                           class="form-control"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Ankunft</span>
                                    </div>
                                    <input id="customer_arrival_hours" name="customer_arrival_hours" required autofocus
                                           autocomplete="customer_arrival_hours" type="text"
                                           class="form-control" maxlength="2"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">

                                    <div class="input-group-prepend" style="width: auto">
                                        <span class="input-group-text" id="inputGroup-sizing-default">:</span>
                                    </div>
                                    <input id="customer_arrival_minutes" name="customer_arrival_minutes" required autofocus
                                           autocomplete="customer_arrival_minutes" type="text"
                                           class="form-control" maxlength="2"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group text-white w-100">

                                <div class="input-group mb-3 register_input_div_corona">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Abreise</span>
                                    </div>
                                    <input id="customer_departure_hours" name="customer_departure_hours" required autofocus
                                           autocomplete="customer_departure_hours" type="text"
                                           class="form-control" maxlength="2"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">

                                    <div class="input-group-prepend" style="width: auto">
                                        <span class="input-group-text" id="inputGroup-sizing-default">:</span>
                                    </div>
                                    <input id="customer_departure_minutes" name="customer_departure_minutes" required autofocus
                                           autocomplete="customer_departure_minutes" type="text"
                                           class="form-control" maxlength="2"
                                           aria-label="Sizing example input"
                                           aria-describedby="inputGroup-sizing-default">
                                </div>

                            </div>
                        </div>
                        <div class="row justify-content-end pr-3">
                            <button type="submit" class="btn border-0 btn-outline-dark" data-href="{{route('corona')}}"
                                    data-token="{{csrf_token()}}" id="customer-submit-button">
                                Daten senden
                                <div class="spinner-border spinner-grow-sm" role="status" id="customer-spinner">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <i class="fas" style="display: none" id="customer-button-status"></i>
                            </button>
                        </div>
                    </div>
                    <input id="customer_gastronom_id" name="customer_gastronom_id" type="text" value="{{$data['gastronom_id']}}" hidden>
                </form>
            </div>
        </div>
    </div>
</div>
