bsCustomFileInput.init();
document.getElementById('fileUpload-submit-button').setAttribute('disabled', '');

let uploadButtonStatus = $('#upload-button-status');
let uploadSuccessBar = '<div class="alert alert-success w-50 fixed-bottom mx-auto alert-dismissible fade show" role="alert"><strong>Speisekarte wurde erfolgreich hochgeladen!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

$('#fileUpload-form').submit(function (e) {
    e.preventDefault();
    document.getElementById('upload-spinner').style.display = "inline-block";
    document.getElementById('fileUpload-submit-button').setAttribute('disabled', '');
    uploadButtonStatus.removeClass('fa-check').removeClass('text-success');
    uploadButtonStatus.removeClass('fa-times').removeClass('text-danger');
    var file_data = $('#chooseFile').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $('#pdfs-backdrop').css('display', 'inline-flex');
    $.ajax({
        method: "POST",
        url: $("#fileUpload-submit-button").data('href'),
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (output) {
            document.getElementById('fileUpload-submit-button').removeAttribute('disabled');

            document.getElementById('upload-spinner').style.display = "none";
            document.getElementById('upload-button-status').style.display = "inline-block";
            uploadButtonStatus.addClass('fa-check').addClass('text-success');
            $('#main').append(uploadSuccessBar);

            $('#chooseFile').next('label').html('PDF Speisekarte auswählen');
            $('#pdfs').load('pdfs', function () {
                $('#pdfs-backdrop').hide();
            });
        },
        error: function (xhr, status, error) {
            document.getElementById('fileUpload-submit-button').removeAttribute('disabled');
            document.getElementById('upload-spinner').style.display = "none";
            document.getElementById('upload-button-status').style.display = "inline-block";
            uploadButtonStatus.addClass('fa-times').addClass('text-danger');
            $('#chooseFile').val('');
            $.each(xhr.responseJSON.errors, function (key, item) {
                $('#' + key).addClass('is-invalid');
                $("#errors-" + key).append(item)
            });
            $('#pdfs').load('pdfs', function () {
                $('#pdfs-backdrop').hide();
            });
        }
    });
});

$(document.getElementById('chooseFile')).change(function () {
    enableUpload();
});

function enableUpload() {
    document.getElementById('chooseFile').removeAttribute('disabled');
    document.getElementById('fileUpload-submit-button').removeAttribute('disabled');
}
