$(document).ready(function() {
    $('.button-0').click(function(e) {
        e.preventDefault();
        $('#step-0').hide();
        $('#step-1').show();
    });
    $('.button-1').click(function(e) {
        e.preventDefault();
        $('#step-1').hide();
        $('#step-2').show();
    });
    $('.button-2').click(function(e) {
        e.preventDefault();
        $('#step-2').hide();
        $('#step-3').show();
    });
    $('.button-3').click(function(e) {
        e.preventDefault();
        $('#step-3').hide();
        $('#step-4').show();
    });
    $('.button-4').click(function(e) {
        e.preventDefault();
        $('#step-4').hide();
        $('#obrigado').show();
    });

    $('.button-fotos').click(function(e) {
        e.preventDefault();
        $('#fotos').click();
    });

});