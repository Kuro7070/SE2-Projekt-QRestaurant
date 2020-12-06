let email = $('#email');
let nachricht = $('#nachricht');
let name = $('#name');
let contactButtonStatus = $('#contact-button-status');

let mailError = $("#errors-email");
let nachrichtError = $("#errors-nachricht");
let nameError = $("#errors-name");
let contactSuccessBar = '<div class="alert alert-success w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert"><strong>Vielen Dank für Deine Nachricht!</strong> Wir werden uns so schnell wie möglich bei Dir melden!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

$('#contact-form').submit(function (e) {
    e.preventDefault();
    document.getElementById('contact-spinner').style.display = "inline-block";
    document.getElementById('contact-submit-button').setAttribute('disabled', '');
    contactButtonStatus.removeClass('fa-check').removeClass('text-success');
    contactButtonStatus.removeClass('fa-times').removeClass('text-danger');
    $.ajax({
        method: "POST",
        url: $("#contact-submit-button").data('href'),
        data: {
            name: name.val(),
            email: email.val(),
            nachricht: nachricht.val()
        },
        success: function (data) {
            document.getElementById('contact-submit-button').removeAttribute('disabled');
            clearInputsAndErrors();
            document.getElementById('contact-spinner').style.display = "none";
            name.val("");
            email.val("");
            nachricht.val("");
            document.getElementById('contact-button-status').style.display = "inline-block";
            contactButtonStatus.addClass('fa-check').addClass('text-success');
            $('#main').append(contactSuccessBar);
        },
        error: function (xhr, status, error) {
            document.getElementById('contact-submit-button').removeAttribute('disabled');
            document.getElementById('contact-spinner').style.display = "none";
            document.getElementById('contact-button-status').style.display = "inline-block";
            contactButtonStatus.addClass('fa-times').addClass('text-danger');
            clearInputsAndErrors();
            $.each(xhr.responseJSON.errors, function (key, item) {
                $('#' + key).addClass('is-invalid');
                $("#errors-" + key).append(item)
            });
        }
    })
});

email.on("input", function () {
    email.removeClass('is-invalid');
    mailError.empty();
    document.getElementById('contact-button-status').style.display = "none";

});

nachricht.on("input", function () {
    nachricht.removeClass('is-invalid');
    nachrichtError.empty();
    document.getElementById('contact-button-status').style.display = "none";
});

name.on("input", function () {
    name.removeClass('is-invalid');
    nameError.empty();
    document.getElementById('contact-button-status').style.display = "none";
});

function clearInputsAndErrors() {
    email.removeClass('is-invalid');
    nachricht.removeClass('is-invalid');
    name.removeClass('is-invalid');
    mailError.empty();
    nachrichtError.empty();
    nameError.empty();
}
