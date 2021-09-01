$(document).ready(function(){
    $("section#navegacion a").click(function(){
        $("section#navegacion a").removeClass('active');
        $(this).addClass('active');

    });
    $('#informacion-programa').carousel({
        interval: false,
     });
     $('#seleccionperiodo').change(function(){
        $('.bloque-materia').closest('.col-md-4').hide({easing : 'linear'});
        
        $('.' + $(this).val()).closest('.col-md-4').show('20');
    });

    function changeDiv(value) {
        $('.bloque-materia').closest('.col-md-4').hide({ easing: 'linear' });
    
        $('.' + value).closest('.col-md-4').show('20');
    }
    
    var value = $('#seleccionperiodo').val();
    changeDiv(value);
});