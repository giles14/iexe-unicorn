$(document).ready(function(){
    var mytel = document.querySelector("#telefono-beca");
    var calculaTel = window.intlTelInput(mytel, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js",
    });

    $('button#crm').click(function(){
        var nombre = $(this).parents('#calcular-beca').find("[name='nombre']").val();
        var correo = $(this).parents('#calcular-beca').find("[name='email']").val();
        var telefono = $(this).parents('#calcular-beca').find("[name='telefono']").val();
        var programa = $(this).parents('#calcular-beca').find("[name='programa']").val();
        var porcentaje = $(this).parents('#calcular-beca').find("[name='porcentaje-2']").val();
    
    var telefono = calculaTel.getNumber(crossOriginIsolated);
    console.log(telefono);
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#calcula-beca" + "&charifaz=" + navigator.userAgent + "&adicional=origen:%20calcula-tu-beca porcentaje=" + porcentaje,
    success: function(data){
        console.log(data);
        if(data == true || data == "saved"){
            console.log("se salvó :)");

        }else if(data == "duplicated"){
            console.log("Ya hay un registro con este correo electrónico en CRM");
        } else{
            console.log("El registro fue guardado en el CRM");
        }
        
    },
    error: function(data){
        console.log("No se logró contactar al servidor");
        console.log(data);
    }
        });
    });
});

