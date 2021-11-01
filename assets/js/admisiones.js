var doctorado = document.querySelector("#telefono-doctorado");
var telDoctorado = window.intlTelInput(doctorado, {
  localizedCountries: { 'us': 'Estados Unidos' },
  preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
  separateDialCode: true,
  utilsScript: "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/js/utils.js",
});
var maestria = document.querySelector("#telefono-maestria");
var telMaestria = window.intlTelInput(maestria, {
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

    $("button.al-crm").click(function(){
        var doctore = telDoctorado.getNumber(crossOriginIsolated);
        var maestre = telMaestria.getNumber(crossOriginIsolated);
        var licenciatura = iti.getNumber(crossOriginIsolated);

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
        var correo = $(this).parents('.el-formulario').find("[name='correo']").val();
        console.log(nombre + ' , ' + telefonoA + ' , ' + programa + ' , ' + correo);

        $.ajax({
            url: 'https://api.redisoft.dev/Leads/web',
            type: 'post',
            data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefonoA + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#proceso" + "&charifaz=" + navigator.userAgent + "&adicional=origen:%20inicia-tu-proceso",
            success: function(data){
                console.log(data);
                if(data == true || data == "saved"){
                    console.log("se salvó :)");
                    $("#problemaModal").modal('show');
                    $('#interes button.btn.btn-primario').addClass("error");
        
                }else if(data == "duplicated"){
                    console.log("Ya hay un registro con este correo electrónico");
                    $("#duplicadoModal").modal('show');
                } else{
                    $("#guardadoModal").modal('show');
                    $('#interes button.btn.btn-primario').removeClass("error");
                    $('#interes button.btn.btn-primario').addClass("exito");
                }
                $('#interes button.btn.btn-primario').attr("disabled", false);
                
            },
            error: function(data){
                console.log("No se logró contactar al servidor");
                console.log(data);
                $('#interes button.btn.btn-primario').attr("disabled", false);
                $('#interes button.btn.btn-primario').addClass("error");
                $("#modalFracaso").modal('show');
                $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
            }
        });
    });
});