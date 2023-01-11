function enviarFormulario(parent, silent = false, strict = false, debug = true, loadA = true, isValid=true){ 
    console.log(isValid);
    if(!isValid)return;
    const forma = parent.closest('form');
    boton = forma.querySelector('.ld-ext-right');
    if (loadA){
      boton.classList.add('running');
      boton.setAttribute("disabled", '');
    }
    
    var elementos = forma.getElementsByTagName("input");
    try{
      var selecciones = forma.getElementsByTagName("select");
    }catch(err){
      console.log('no se detecto programa académico');
      console.error(err);
      selecciones[0] = 'SINA';
    }
    
    var idForm = forma.getAttribute('id');
    var nombre = elementos.namedItem('nombre').value;
    var mail = encodeURIComponent(elementos.namedItem('email').value);
    var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
    var porcentaje = '';
    var conv = document.getElementById('hiddenConvenio');
    var conve = document.getElementById('convenios');
    var escolaridad = "";
    var textoBoton = "OK";
    try {
      var mensaje = elementos.namedItem("mensaje").value;
    }catch(err){
      console.log(err);
    }

    if(elementos['porcentaje-2']){
        porcentaje = ' porcentaje=' + encodeURIComponent(elementos.namedItem('porcentaje-2').value);
    }
    try{
      if(selecciones[0]){
        var programa = selecciones["programa"].value;  
      }
    }catch(err){
        console.log(err);
    }

    try{
      var programa = elementos["programa"].value;
    }catch(err){
        console.log(err);
    }
   
    try{
      if(selecciones["mensaje"]){
        var mensaje = selecciones["mensaje"].value;  
      }    
    } catch(err) {
      console.log(err);
    }

    try{
      escolaridad = forma.querySelector('input[name="escolaridad"]:checked').value;
      switch (escolaridad){
        case 'Si':
          textoBoton = "Entendido";
          break;
        case 'No':
          textoBoton = "Correcto";
          break;
        case 'En-tramite':
          textoBoton = "Continuar"
          break;
        default:
          textoBoton = "OK";
      }
    }
    catch(err){
      console.log(err);
    }
        
    var adicional = window.location.href + "#" + forma.id;
    var convenio = "";
    ip = httpGet();
    
    if(selecciones["convenios"]){
        convenio = selecciones["convenios"].value;
    }
  
    if(typeof(conv) != 'undefined' && conv != null){
      var convenio = conv.value;
    }
    if(typeof(conve) != 'undefined' && conve != null){
      var convenio = conve.value;
    }
    
    var origen = forma.dataset.origen;
    //var mensaje = elementos.namedItem("mensaje").value;
    if(typeof(mensaje) != 'undefined' && mensaje != null){
      var origen = origen + " Mensaje: " + mensaje;
    }
    if (debug){
        console.log(nombre);
        console.log(mail);
        console.log(telefono);
        console.log(programa);
        console.log(convenio);
        console.log(porcentaje);
        console.log(origen);
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
            removeAttribute("disabled");
          
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
          removeAttribute("disabled");
        }else if(responseServer["status"] == 'success') {
          if(!silent){
            sleep(2000).then(() => { Swal.fire({
              // icon: 'success',
              // title: 'Datos registrados con éxito',
              // toast: true,
              // //position: 'bottom-end',
              // showConfirmButton: false,
              // timer: 6000,
              // timerProgressBar: true,
              // confirmButtonColor: "green",
              // confirmButtonText: 'Entendido'
              icon: 'success',
              title: 'Tus datos han sido registrados',
              text: 'Nuestros asesores se comunicarán contigo en breve',
              confirmButtonText: textoBoton
            });
            $('#grid').modal('hide');
            console.log("se guardó efectivamente");
            if(loadA){
              boton.classList.remove('running');
              boton.style.backgroundColor = 'green';
            }
            });
          }
          
          
            
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
    var data = "nombre="+ nombre +"&correo="+ mail +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+ window.location.href +"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen + porcentaje + "&idConvenio="+ convenio + "&origen=" + adicional +  "&ip=" + ip + "&escolar=" + escolaridad;
    
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
    xmlHttp.open( "GET", 'https://geo.ipify.org/api/v2/country?apiKey=at_hDuU1vZBExogkhLRsrXTnXL2qzSyF&ipAddress', false ); // false for synchronous request
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