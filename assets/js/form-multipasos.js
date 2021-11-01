$(document).ready(function(){
    $("#calcular-beca").validate();
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){        
        if(current == 1){
            var nombre = $(this).parents('#calcular-beca').find("[name='nombre']").val();
            var email = $(this).parents('#calcular-beca').find("[name='email']").val();
            var telefono = $(this).parents('#calcular-beca').find("[name='telefono']").val();
            var programa = $(this).parents('#calcular-beca').find("[name='programa']").val();
            if((nombre.length != 0) && (email.length != 0) && (telefono.length != 0) && ($('#calcular-beca')[0].checkValidity()) ){
                console.log('tiene informacion');
                console.log(current);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
            }else{
                console.log('PASO UNO NO PASO');
                console.log(current);
                alert('Por favor llene correctamente los datos antes de contiunuar');
                console.log('nuevo valor ' + current);
            }
        }else if(current == 2){
            if(($('input[name=edad]').val().length != 0) && ($('input[name=promedio]').val().length != 0)){
                console.log('tiene informacion 2');
                console.log(current);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
            }else{
                console.log('PASO DOS NO PASO');
                console.log(current);
                alert('Por favor llene los datos antes de contiunuar');
                current = 1;
                console.log('nuevo valor ' + current);
            }
        } else if(current == 3){
            if($('#entiendo').prop('checked')){
                console.log('tiene informacion 3');
                console.log(current);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
            }else{
                console.log('PASO TRES NO PASO');
                console.log(current);
                alert('debe de aceptar los términos antes de continuar');
                current = 2;
            }
        }
        

    

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
    console.log(current);
    $(".submit").click(function(){
    return false;
    });
});