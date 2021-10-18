var maestria = document.querySelector("#telefono-maestria");
var telMaestria = window.intlTelInput(maestria, {
  localizedCountries: { 'us': 'Estados Unidos' },
  preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
  separateDialCode: true,
  utilsScript: "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/js/utils.js",
});
var doctorado = document.querySelector("#telefono-doctorado");
var telDoctorado = window.intlTelInput(doctorado, {
  localizedCountries: { 'us': 'Estados Unidos' },
  preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
  separateDialCode: true,
  utilsScript: "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/js/utils.js",
});
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

     // telMaestria = telMaestria.getNumber(crossOriginIsolated);
     // telDoctorado = telDoctorado.getNumber(crossOriginIsolated);
     // telLicenciatura = iti.getNumber(crossOriginIsolated);
     

    $("button.al-crm").click(function(){
        var maestre = "";
        var doctore = "";
        var licenciatura = "";
        maestre = telMaestria.getNumber(crossOriginIsolated);
        doctore = telDoctorado.getNumber(crossOriginIsolated);
        licenciatura = iti.getNumber(crossOriginIsolated);

        telLicenciatura = '';
        telDoctorado = '';
        if(maestre.length > 1 ){
            telefonoA = maestre;
        } else if(doctore.length > 1 ){
            telefonoA = doctore;

        } else if(licenciatura.length > 1){
            telefonoA = licenciatura;
        }
        console.log(telefonoA);
        console.log('En la funcion');
        var nombre = $(this).parents('.el-formulario').find("[name='nombre']").val();
        var programa = $(this).parents('.el-formulario').find("[name='programa']").val();
        console.log(nombre + ' , ' + telefonoA + ' , ' + programa);
    });
});