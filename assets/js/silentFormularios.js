$(document).ready(function(){
    var mytel = document.querySelector("#telefono-beca");
    var calculaTel = window.intlTelInput(mytel, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js",
    });

    $('button#crm').click(function(){
    var nombre = $("[name='nombre']").val();
    var correo = $("[name='email']").val();
    
    if($('input#hiddenPrograma').val()){
        var programa = $('input#hiddenPrograma').val();
        console.log(programa);
    }else{
        var programa = $("[name='programa']").val();
        console.log(programa);
    }
    var telefono = calculaTel.getNumber(crossOriginIsolated);
    console.log(telefono);
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#interes" + "&charifaz=" + navigator.userAgent,
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

