$(document).ready(function(){
    var input = document.querySelector("#telefono-iexe");
    var becaIexeTel = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });

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

//     $('.modal form button').click(function(){
//         var ancest = $(this).parent().children();


//         console.log(ancest);
//         $('#interes button.btn.btn-primario').removeClass("error exito"); 
//         $('#interes button.btn.btn-primario').attr("disabled", true);
//         var nombre = $("[name='nombreIE']").val();
//         var correo = $("[name='emailIE']").val();

//         if($('input#hiddenPrograma').val()){
//             var programa = $('input#hiddenPrograma').val();
//             console.log(programa);
//         }else{
//             var programa = $("[name='programaIE']").val();
//             console.log(programa);
//         }
//         var telefono = becaIexeTel.getNumber(crossOriginIsolated);
//         var data = "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#becas" + "&charifaz=" + navigator.userAgent;
//         console.log(data);
//     $.ajax({
//         url: 'https://api.redisoft.dev/Leads/web',
//         type: 'post',
//         data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#becas" + "&charifaz=" + navigator.userAgent,
//         success: function(data){
//             console.log(data);
//             if(data == true || data == "saved"){
//                 console.log("se salvó :)");
//                 $("#problemaModal").modal('show');
//                 $('#interes button.btn.btn-primario').addClass("error");
//                 console.log(data);
    
//             }else if(data == "duplicated"){
//                 console.log("Ya hay un registro con este correo electrónico");
//             } else{
//                 $("#guardadoModal").modal('show');
//                 $('#interes button.btn.btn-primario').removeClass("error");
//                 $('#interes button.btn.btn-primario').addClass("exito");
//             }
//             $('#interes button.btn.btn-primario').attr("disabled", false);
            
//         },
//         error: function(data){
//             console.log("No se logró contactar al servidor");
//             console.log(data);
//             $('#interes button.btn.btn-primario').attr("disabled", false);
//             $('#interes button.btn.btn-primario').addClass("error");
//             // $("#modalFracaso").modal('show');
//             // $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
//         }
//     });
// });

    

    function changeDiv(value) {
        $('.bloque-materia').closest('.col-md-4').hide({ easing: 'linear' });
    
        $('.' + value).closest('.col-md-4').show('20');
    }
    
    var value = $('#seleccionperiodo').val();
    changeDiv(value);
});