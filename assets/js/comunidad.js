$(document).ready(function(){
    $('#ecuador').hover(function(){
        $('#mensaje-ecuador').show(500);
    } , function(){
        $('#mensaje-ecuador').hide(500);
    } );
    $('#colombia').hover(function(){
        //$('#mensaje-colombia').addClass('d-block');
        $('#mensaje-colombia').show(500);
    } , function(){
        //$('#mensaje-colombia').removeClass('d-block');
        $('#mensaje-colombia').hide(500);
    } );
    $('#guatemala').hover(function(){
        $('#mensaje-guatemala').show(500);
    } , function(){
        $('#mensaje-guatemala').hide(500);
    } );
    $('#mexico').hover(function(){
        $('#mensaje-mexico').show(500);
    } , function(){
        $('#mensaje-mexico').hide(500);
    } );
    $('#elSalvador').hover(function(){
        $('#mensaje-salvador').show(500);
    } , function(){
        $('#mensaje-salvador').hide(500);
    } );

});