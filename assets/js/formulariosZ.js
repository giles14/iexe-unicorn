function enviarFormulario(parent, silent = false, strict = false, debug = false){
    const forma = parent.closest('form');
    var elementos = forma.getElementsByTagName("input");
    var selecciones = forma.getElementsByTagName("select");
    var idForm = forma.getAttribute('id');
    var nombre = elementos.namedItem('nombre').value;
    var mail = encodeURIComponent(elementos.namedItem('email').value);
    var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
    var programa = selecciones["programa"].value;
    var adicional = window.location.href + "#" + forma.id;
    var convenio = "";
    var ip ="";
    var ip = getIP();
    if(selecciones["convenios"] != ""){
        convenio = selecciones["convenios"].value;
    }
    var origen = forma.dataset.origen;
    if (debug){
        console.log(nombre);
        console.log(mail);
        console.log(telefono);
        console.log(programa);
        console.log(convenio);
    }
    
    var url = "https://hooks.zapier.com/hooks/catch/6680892/bz4gez0";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.onload = function(resp){
        console.log(xhttp.response);
        const responseServer = JSON.parse(xhttp.response);
        if(xhttp.response == 'duplicated'){
          Swal.fire({
            title: '¡Duplicado!',
            text: 'Tus datos ya se encuentran registrados en nuestro sistema',
            icon: 'warning',
            toast: true,
            timer: 6000,
            timerProgressBar: true,
            confirmButtonColor: "green",
            confirmButtonText: 'Entendido'
          });
          
            console.log("está duplicado");
        }else if(responseServer["status"] == 'duplicated') {
          Swal.fire({
            icon: 'error',
            title: 'Ha ocurrido un error, por favor revisa que los datos estén correctamente llenados e intenta de nuevo',
            toast: true,
            //position: 'bottom-end',
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
            confirmButtonColor: "green",
            confirmButtonText: 'Entendido'
          });
          console.log("se guardó");
        }else if(responseServer["status"] == 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Datos registrados con éxito',
              toast: true,
              //position: 'bottom-end',
              showConfirmButton: false,
              timer: 6000,
              timerProgressBar: true,
              confirmButtonColor: "green",
              confirmButtonText: 'Entendido'
            });
            console.log("se guardó efectivamente");
          }else {
            Swal.fire({
              icon: 'success',
              title: 'Ocurrió un error',
              toast: true,
              //position: 'bottom-end',
              showConfirmButton: false,
              timer: 6000,
              timerProgressBar: true,
              confirmButtonColor: "green",
              confirmButtonText: 'Entendido'
            });
            console.log("Servidor regresó un error");
          }

    }
    var data = "nombre="+ nombre +"&correo="+ mail +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+ window.location.href +"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen + "&idConvenio="+ convenio + "&origen=" + adicional+ "&ip=" + ip;
    
    xhttp.send(data);
    return console.log("esperando mensaje")
}
function getIP(){
    ipThis = $.getJSON('https://api.ipify.org?format=jsonp&callback=?', function(data) {
        var ipThis = ""
        return JSON.stringify(data, null, 2);
    });
    return ipThis;
}
