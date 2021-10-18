$(document).ready(function(){
    $("#licenciaturas .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents(".los-requisitos").toggle();
        $('#licenciaturas .el-formulario').toggle().css("display: flex");
    });
    $("#licenciaturas .el-formulario .regresa-requisitos a").click(function(){
        $('#licenciaturas .los-requisitos').toggle();
        $(this).parents(".el-formulario").toggle();
    });
    $("#maestrias .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents('.los-requisitos').toggle();
        $('#maestrias .el-formulario').toggle().css("display: flex");
    });
    $("#maestrias .el-formulario .regresa-requisitos a").click(function(){
        $('#maestrias .los-requisitos').toggle();
        $(this).parents(".el-formulario").toggle();
    });
    $("#doctorado .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents('.los-requisitos').toggle();
        $('#doctorado .el-formulario').toggle().css("display: flex");
    });
    $("#doctorado .el-formulario .regresa-requisitos a").click(function(){
        $('#doctorado .los-requisitos').toggle();
        $(this).parents("#doctorado .el-formulario").toggle();
    });
    $("section#navegacion a").click(function(){
        window.scrollTo(0,0);
        $("section#navegacion a").removeClass('active');
        $(this).addClass('active');

    });
    $('#informacion-programa').carousel({
        interval: false,
     });
     var input = document.querySelector("#telefono-maestria");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js",
    });
    var input = document.querySelector("#telefono-doctorado");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js",
    });

    $(".formulario-crm").on('click', "button", function(){
        let name = $(this).parent().find("[name='nombre']").val();
        var contenido = $(this).parent().find("input[name=nombre]").val();
        console.log(name);
    });
});