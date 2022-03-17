function enviarFormulario(parent, silent = false, strict = false, debug = false){
    const forma = parent.closest('form');
    var elementos = forma.getElementsByTagName("input");
    var selecciones = forma.getElementsByTagName("select");
    var idForm = forma.getAttribute('id');
    var nombre = elementos.namedItem('nombre').value;
    var mail = encodeURIComponent(elementos.namedItem('email').value);
    var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
    var programa = selecciones["programa"].value;
    var convenio = "";
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
    
    var url = "https://api.redisoft.dev/Leads/web";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.onload = function(resp){
        console.log(xhttp.response);
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
        }else if(xhttp.response == 'saved') {
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
        }else {
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
            console.log("se guardó");
          }

    }
    var data = "nombre="+ nombre +"&correo="+ mail +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+ window.location.href +"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen + "&idConvenio="+ convenio;
    
    xhttp.send(data);
    return console.log("esperando mensaje")
}