
$(document).ready(function() {
    bsCustomFileInput.init();
    document.getElementById('upload').setAttribute('disabled', '');


});

$(document.getElementById('chooseFile')).change(function () {
    enableUpload();
});

function showLoadingSpinner() {
    document.getElementById('spinner').style.display = "inline-block";
    setTimeout(disableUpload, 100);
}

function disableUpload() {
    document.getElementById('upload').setAttribute('disabled', '');
    document.getElementById('chooseFile').setAttribute('disabled', '');
}

function enableUpload() {
    document.getElementById('chooseFile').removeAttribute('disabled');
    document.getElementById('upload').removeAttribute('disabled');
}
