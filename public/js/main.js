$(document).ready(function(){

    $('#stocks-searchbox').on('focus keyup' ,function () {
        $(".ais-results").fadeIn('slow');
    });

    $('#stocks-searchbox').on('focusout blur' ,function () {
        $(".ais-results").fadeOut('500');
    });

});