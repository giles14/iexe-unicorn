var $ = jQuery;
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


    // $('section#header').click(function(){

    //     $("section#header").css({"background" : "url(" + imagese() + ")", "background-position" : 'center'});

    // });

    // function imagese(){
    //     var numero = Math.floor(Math.random() * (4 - 1)) + 1
    //     var urlT = 'https://iexe.xyz/wp-content/themes/iexe-unicorn/assets/img/licenciatura-bg-' +numero+'.webp' 
    //     return urlT;

    // }
    


    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });

    $(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    });
    $(".GaugeMeter").gaugeMeter();
    $("#generar-resultado").click(function(){
        $("#medidorBeca").gaugeMeter({percent:70});
    });
      

});