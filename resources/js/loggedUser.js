let name = $('#id_name');
let email = $('#id_email');
let adresse = $('#id_adresse');
let telefonnummer = $('#id_telefonnummer');

function getData(){
    $.get( "resources/php/getData.php", function( data ) {
        alert( data );

    }).done(function (){
        alert("Success")

    }).fail(function() {
    alert( "error" );
})
    .always(function() {
        alert( "finished" );
    });
}
