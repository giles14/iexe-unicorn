$("button.enviar-landing").click(function(){
    var telefonoA = iti.getNumber(crossOriginIsolated);
    console.log(telefonoA);
    console.log('En la funcion');
    var nombre = $(this).parents('form').find("[name='nombre']").val();
    var programa = $(this).parents('form').find("[name='programa']").val();
    var correo = $(this).parents('form').find("[name='correo']").val();
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