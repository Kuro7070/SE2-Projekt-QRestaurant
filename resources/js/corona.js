let customer_gastronom_id = $('#customer_gastronom_id');
let customer_email = $('#customer_email');
let customer_vorname = $('#customer_vorname');
let customer_nachname = $('#customer_nachname');
let customer_street = $('#customer_street');
let customer_streetno = $('#customer_streetno');
let customer_ort = $('#customer_ort');
let customer_zip = $('#customer_zip');
let customer_telefonnummer = $('#customer_telefonnummer');
let customer_arrival_hours = $('#customer_arrival_hours');
let customer_arrival_minutes = $('#customer_arrival_minutes');
let customer_departure_hours = $('#customer_departure_hours');
let customer_departure_minutes = $('#customer_departure_minutes');
let coronaButtonStatus = $('#customer-button-status');
let coronaSuccessBar = '<div class="alert alert-success w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert">Vielen Dank für das kontaktlose Hinterlegen deiner Daten. <strong>Bleib bitte weiterhin gesund!</strong><br>Möchtest du weitere Personen eintragen? <br><button onclick="focusVorname()" type="button" class="btn btn-dark" data-dismiss="alert" aria-label="Close">Ja</button> <button onclick="collapseForm()" type="button" class="btn btn-light" data-dismiss="alert" aria-label="Close">Nein</button> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

$('#customer-form').submit(function (e) {
    e.preventDefault();
    document.getElementById('customer-spinner').style.display = "inline-block";
    document.getElementById('customer-submit-button').setAttribute('disabled', '');
    coronaButtonStatus.removeClass('fa-check').removeClass('text-success');
    coronaButtonStatus.removeClass('fa-times').removeClass('text-danger');
    $.ajax({
        method: "POST",
        url: $("#customer-submit-button").data('href'),
        data: {
            customer_gastronom_id: customer_gastronom_id.val(),
            customer_email: customer_email.val(),
            customer_nachname: customer_nachname.val(),
            customer_vorname: customer_vorname.val(),
            customer_street: customer_street.val(),
            customer_streetno: customer_streetno.val(),
            customer_ort: customer_ort.val(),
            customer_zip: customer_zip.val(),
            customer_telefonnummer: customer_telefonnummer.val(),
            customer_arrival_hours: customer_arrival_hours.val(),
            customer_arrival_minutes: customer_arrival_minutes.val(),
            customer_departure_hours: customer_departure_hours.val(),
            customer_departure_minutes: customer_departure_minutes.val()
        },
        success: function (data) {
            document.getElementById('customer-submit-button').removeAttribute('disabled');
            document.getElementById('customer-spinner').style.display = "none";
            customer_email.val("");
            customer_vorname.val("");
            customer_nachname.val("");
            customer_street.val("");
            customer_streetno.val("");
            customer_ort.val("");
            customer_zip.val("");
            customer_telefonnummer.val("");
            customer_arrival_hours.val("");
            customer_arrival_minutes.val("");
            customer_departure_hours.val("");
            customer_departure_minutes.val("");
            document.getElementById('customer-button-status').style.display = "inline-block";
            coronaButtonStatus.addClass('fa-check').addClass('text-success');
            $('#collapseCorona').collapse();
            $('#pdfmain').append(coronaSuccessBar);
        },
        error: function (xhr, status, error) {
            document.getElementById('customer-submit-button').removeAttribute('disabled');
            document.getElementById('customer-spinner').style.display = "none";
            document.getElementById('customer-button-status').style.display = "inline-block";
            coronaButtonStatus.addClass('fa-times').addClass('text-danger');

        }
    })
});

function focusVorname(){
    customer_vorname.focus();
}

function collapseForm(){
    $('.collapse').collapse('hide');
}
