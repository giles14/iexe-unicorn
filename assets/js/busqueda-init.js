/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function () {
    'use strict';

    $('#mi-busqueda').devbridgeAutocomplete({
        lookup: valores,
        maxHeight: 500,
        minChars: 1,
        onSelect: function(suggestion){
            window.location.href=suggestion.data.link;
            //console.log(suggestion.data.link);
        },
        showNoSuggestionNotice: true,
        noSuggestionNotice: 'No se encontraron resultados',
        groupBy: 'category'
    });
});
$(document).ready(function(){
    $('input#mi-busqueda').focus(function(){
        $('.navegacion-botones a').css("margin-left","20px");
    });
    $('input#mi-busqueda').blur(function(){
        $('.navegacion-botones a').css("margin-left","80px");
    });
})