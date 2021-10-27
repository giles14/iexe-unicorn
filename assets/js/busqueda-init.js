/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function () {
    'use strict';

    //var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(countriesArray, function (country) {
                     // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(country.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });

    // var licenciaturas = ['Seguridad Pública' , 'Ciencias Políticas y Administración Pública' , 'Derecho' , 'Administración de Empresas'];
    // var maestrias = ['Seguridad Pública y Políticas Públicas', 'Evaluación de Políticas Públicas' , 'Finanzas Públicas', 'Administración de Negocios (MBA)', 'Ingeniería en Tecnologías de la Información'];
    // var lic = $.map(licenciaturas, function (a) { return { value: a, data: { category: 'Licenciaturas', link: 'https://iexe.edu.mx/oferta-educativa/' }}; });
    // var mae = $.map(maestrias, function (team) { return { value: team, data: { category: 'Maestrías' } }; });
    // var todos = lic.concat(mae);
    $('#mi-busqueda').devbridgeAutocomplete({
        lookup: valores,
        maxHeight: 500,
        minChars: 1,
        onSelect: function(suggestion){
            //window.location.href=suggestion;
            console.log(suggestion.data.link);
        },
        showNoSuggestionNotice: true,
        noSuggestionNotice: 'No se encontraron resultados',
        groupBy: 'category'
    });
    
    // Initialize autocomplete with custom appendTo:
    $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#suggestions-container'
    });
    $('#autocomplete-custom-append').autocomplete({
        lookup: valores,
        appendTo: '#suggestions-container'
    });

    // Initialize autocomplete with custom appendTo:
    $('#autocomplete-dynamic').autocomplete({
        lookup: countriesArray
    });
});