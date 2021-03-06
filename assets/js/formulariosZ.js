function enviarFormulario(parent, silent = false, strict = false, debug = true){
    //boton = parent.getElementsByClassName('ld-ext-right');    
    const forma = parent.closest('form');
    boton = forma.querySelector('.ld-ext-right');
    boton.classList.add('running');
    boton.setAttribute("disabled", '');
    var elementos = forma.getElementsByTagName("input");
    var selecciones = forma.getElementsByTagName("select");
    var idForm = forma.getAttribute('id');
    var nombre = elementos.namedItem('nombre').value;
    var mail = encodeURIComponent(elementos.namedItem('email').value);
    var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
    var porcentaje = '';
    if(elementos['porcentaje-2']){
        porcentaje = ' porcentaje=' + encodeURIComponent(elementos.namedItem('porcentaje-2').value);
    }
    
    if(selecciones[0]){
      var programa = selecciones["programa"].value;  
    }else{
      var programa = elementos["programa"].value;
    }
    //var programa = selecciones["programa"].value;
    var adicional = window.location.href + "#" + forma.id;
    var convenio = "";
    // var ObjIp =""; 
    // ObjIp = JSON.parse(httpGet()); 
    // ip = ObjIp['location']['country'];
    ip = httpGet();
    
    if(selecciones["convenios"]){
        convenio = selecciones["convenios"].value;
    }
    var origen = forma.dataset.origen;
    if (debug){
        console.log(nombre);
        console.log(mail);
        console.log(telefono);
        console.log(programa);
        console.log(convenio);
        console.log(porcentaje);
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
            title: '¬°Duplicado!',
            text: 'Tus datos ya se encuentran registrados en nuestro sistema',
            icon: 'warning',
            toast: true,
            timer: 6000,
            timerProgressBar: true,
            confirmButtonColor: "green",
            confirmButtonText: 'Entendido'
          });
            removeAttribute("disabled");
          
            console.log("est√° duplicado");
        }else if(responseServer["status"] == 'duplicated') {
          Swal.fire({
            icon: 'error',
            title: 'Ha ocurrido un error, por favor revisa que los datos est√©n correctamente llenados e intenta de nuevo',
            toast: true,
            //position: 'bottom-end',
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
            confirmButtonColor: "green",
            confirmButtonText: 'Entendido'
          });
          console.log("se guard√≥");
          removeAttribute("disabled");
        }else if(responseServer["status"] == 'success') {
          if(!silent){
            sleep(2000).then(() => { Swal.fire(
              // icon: 'success',
              // title: 'Datos registrados con √©xito',
              // toast: true,
              // //position: 'bottom-end',
              // showConfirmButton: false,
              // timer: 6000,
              // timerProgressBar: true,
              // confirmButtonColor: "green",
              // confirmButtonText: 'Entendido'
              'Tus datos han sido registrados',
              'Nuestros asesores se comunicar√°n contigo en breve',
              'success'
            );
            $('#grid').modal('hide');
            console.log("se guard√≥ efectivamente");
            boton.classList.remove('running');
            boton.style.backgroundColor = 'green';
            });
          }
          
          
            
          }else {
            Swal.fire({
              icon: 'success',
              title: 'Ocurri√≥ un error',
              toast: true,
              //position: 'bottom-end',
              showConfirmButton: false,
              timer: 6000,
              timerProgressBar: true,
              confirmButtonColor: "green",
              confirmButtonText: 'Entendido'
            });
            console.log("Servidor regres√≥ un error");
          }

    }
    var data = "nombre="+ nombre +"&correo="+ mail +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+ window.location.href +"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen + porcentaje + "&idConvenio="+ convenio + "&origen=" + adicional +  "&ip=" + ip;
    
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
function httpGet()
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'https://geo.ipify.org/api/v2/country?apiKey=at_17J238PMAJ4vVWoPH7Uhxm48D1p1V&ipAddress', false ); // false for synchronous request
    xmlHttp.send( null );
    if(xmlHttp.response.status === 403){
      ip = "falla";
      return ip;
    }else {
      ObjIp= JSON.parse(xmlHttp.responseText)
      if(ObjIp['code'] == 403){
        ip = "falla";
      }else{
        ip = ObjIp['location']['country'];
      }
      
      return ip;
    }
    
}
// function sleep (time) {
//   return new Promise((resolve) => setTimeout(resolve, time));
// }
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}