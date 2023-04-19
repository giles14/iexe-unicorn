<?php /* Template Name: Landing entrelineas */ ?>
<?php 
$banner = get_field('banner_pagina_principal', 3505);
$bannerMovil = get_field('banner_pagina_principal_movil', 3505);
?>
<?php get_template_part( 'template-parts/header-audio'); ?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 col-xl-6">
                <h1 class="main-title">"ENTRE LÍNEAS"</h1>
                <h3 class="sub-title">Resumen de nuestras<br> recomendaciones</h3>
                <p class="main-text">
                    Adquiere herramientas y desarrolla habilidades que expandan tu experiencia. Destaca en tu área de estudio o trabajo aprendiendo de docentes expertos en diversas áreas de especialidad, ingresa tu mail y descarga el resumen del libro en formato PDF.
                </p>
            </div>
            <div class="col-6 col-lg-5 col-xl-6 d-none d-lg-block">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iexe-chica.png" alt="" class="main-book img-fluid">
            </div>
        </div>
    </div>
</section>
<style>
    body#entre\ líneas{
        background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg_entrelineas_iexe.webp') #80C5EA;
        background-size: contain;
        background-repeat: no-repeat;
    }
    h1.main-title {
        font-family: 'Georama', sans-serif;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: #00FFE8;
        font-size: 52px;
    }
    #nuestros-resumenes h1 {
        font-size: 36px;
        color: #001e42;
        text-align: center;
        font-weight: 400;
        font-family: 'Georama', sans-serif;
    }
    h3.sub-title {
        font-size: 36px;
        color: #FFF;
        font-weight: 200;
        letter-spacing: 1.08px;
    }
    p.main-text {
        color: #FFF;
        font-size: 18px;
        letter-spacing: 0.16px;
        font-weight: 200;
    }
    p.main-text {
        color: #FFF;
        font-size: 18px;
        letter-spacing: 0.16px;
        font-weight: 200;
        max-width: 416px;
    }
    .book-container {
        background: #EDEDED;
        border-radius: 22px;
        padding-top: 36px;
    }
    #nuestros-resumenes button {
        border-radius: 27px;
        background: #0018FF;
        border: none;
        color: #FFF;
        font-weight: 600;
        font-size: 14px;
        width: 65%;
        height: 40px;
        margin-bottom: 25px;
        box-shadow: 0px 9px 6px #0c22f526;
    }
    section#banner-inferior{
        background: linear-gradient(180deg, rgba(128,197,234,1) 17%, rgba(128,197,234,1) 17%, rgba(122,190,234,1) 54%, rgba(29,76,229,1) 100%);;
    }
    section#pie {
        margin-top: 0px;
    }
    .banner-inscripcion{
        margin-bottom: 140px;
    }
    a.solicitar-info {
        color: #FFF;
    }
    nav.navbar.sticky {
    background: none!important;
    /* top: 0; */
    box-shadow: unset;
    /* transition: all 0.2s ease-out; */
    }
    #nuestros-resumenes button:disabled {
        background: #c7c7c7;
    }
    @media (max-width: 600px){
        h1.main-title {
            font-size: 40px;
            text-align: center;
        }
        body#entre\ líneas{
            background-size: auto;
            background-repeat: no-repeat;
        }
        #nuestros-resumenes h1 {
            color: #FFF;
        }
        section#main {
            margin-top: 0px;
        }
        .sticky a.navbar-brand {
            width: 185px;
        }
    }
</style>
<section id="nuestros-resumenes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3">NUESTROS RESÚMENES</h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="book-container text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/audiolibros-IEXE_dpp.png" alt="" class="img-fluid mb-3">
                    <!--<a  data-toggle="modal" data-target="#staticBackdrop" href="https://www.iexe.edu.mx/wp-content/uploads/2023/01/Resumen_DPP_iexe.pdf" target="_blank"><button>¡Descarga el resumen!</button></a> -->
                    <a  data-toggle="modal" class="boton-descarga-1" data-target="#staticBackdrop" href="#" target="_blank" data-id="1" download><button class="boton-descarga-1">¡Descarga el resumen!</button></a>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="book-container text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/audiolibros-IEXE_4.png" alt="" class="img-fluid mb-3">
                    <!-- <a data-toggle="modal" data-target="#staticBackdrop" href="https://www.iexe.edu.mx/wp-content/uploads/2022/11/Resumen_Esencialismo.pdf" target="_blank"><button>¡Descarga el resumen!</button></a>  -->
                    <a data-toggle="modal" class="boton-descarga-2" data-target="#staticBackdrop" href="#" target="_blank" data-id="2" download><button>¡Descarga el resumen!</button></a> 
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="book-container text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/elego_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                    <a data-toggle="modal" class="boton-descarga-3" data-target="#staticBackdrop" href="#" target="_blank" data-id="3" download><button>¡Descarga el resumen!</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/02/Mockup_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-5" data-target="#staticBackdrop" href="#" target="_blank" data-id="5" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/02/piensalo_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-4" data-target="#staticBackdrop" href="#" target="_blank" data-id="4" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/02/habitosaudiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-6" data-target="#staticBackdrop" href="#" target="_blank" data-id="6" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
        </div> 
        <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/03/daryrecibir_audiolibros-IEXE.webp" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-8" data-target="#staticBackdrop" href="#" target="_blank" data-id="8" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/03/decidete_audiolibros-IEXE.webp" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-7" data-target="#staticBackdrop" href="#" target="_blank" data-id="7" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/03/elabismo_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-9" data-target="#staticBackdrop" href="#" target="_blank" data-id="9" download><button>¡Descarga el resumen!</button>
                        </a>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/trececosas_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-11" data-target="#staticBackdrop" href="#" target="_blank" data-id="11" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/03/habitos_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-10" data-target="#staticBackdrop" href="#" target="_blank" data-id="10" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/04/mitolider_audiolibros-IEXE.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-12" data-target="#staticBackdrop" href="#" target="_blank" data-id="12" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-3 mx-auto d-none">
                    <div class="book-container text-center">
                        <img src="https://www.iexe.edu.mx/wp-content/uploads/2023/04/mideimporta_audiolibros-IEXE-copy.png" alt="" class="img-fluid mb-3">
                            <a  data-toggle="modal" class="boton-descarga-13" data-target="#staticBackdrop" href="#" target="_blank" data-id="13" download><button>¡Descarga el resumen!</button></a>
                    </div>
                </div>
        </div>  
    </div>
</section>
<section id="banner-inferior">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                        if( !empty( $banner ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($banner['url']); ?>" class="d-none d-sm-block img-fluid banner-inscripcion" alt="<?php echo esc_attr($banner['alt']); ?>" /></a>
                        <?php endif; ?>
                        <?php
                        if( !empty( $bannerMovil ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($bannerMovil['url']); ?>" class="d-block d-sm-none img-fluid banner-inscripcion" alt="<?php echo esc_attr($bannerMovil['alt']); ?>" /></a>
                        <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Descarga el libro
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content p-0">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100" id="staticBackdropLabel">Recibe el resumen ¡Gratis!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4">
      <form id="resumen" action="https://iexe.edu.mx/entre/procesa.php" onsubmit="event.preventDefault(); enviarForm()" method="POST">
            <div class="form-group">
                    <label for="nombre">Nombre completo*</label>
                    <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                    <label for="correo">Correo electrónico*</label>
                    <input name="email" type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                    <input type="hidden" id="elID" name="elID" value="0">
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary enviar mt-3">¡Descargar el resumen!<span class="loader d-none"></span></button>
                </div>
            </div>
            <span class="disclaimer">Al ingresar tus datos, aceptas nuestro <a href="https://iexe.edu.mx/aviso-de-privacidad/">Aviso de Privacidad</a>.</span>
        </form>
        <div id="links" class="ocultar">
            <h3 class="text-center">¡Muchas gracias! en unos segundos se descargará tu resumen.</h3>
            <!-- <a class="d-block" id="link-1" href="#" target="_blank">Diseño de políticas públicas</a>
            <a class="d-block" id="link-2" href="#" target="_blank">Essentialism</a> -->
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Descargar</button>
      </div> -->
    </div>
  </div>
</div>
<script>
    function enviarForm(){
        forma = document.getElementById('resumen');
        elementos = forma.getElementsByTagName('input');
        nombre = elementos.namedItem("nombre").value;
        correo = elementos.namedItem("email").value;
        elId = elementos.namedItem("elID").value;
        console.log ("el Id" + elId);
        let url = "https://iexe.edu.mx/entre/procesa.php";
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", url);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        let cargaImg = document.getElementsByClassName("loader")[0];
        cargaImg.classList.toggle('d-none');
        
        xhttp.onload = function(){
            const responseServer = JSON.parse(xhttp.response);
            if(xhttp.response){
                forma = document.getElementById('resumen');
                elementos = forma.getElementsByTagName('input');
                elId = elementos.namedItem("elID").value - 1;
                console.log("el id " + elId);
                //console.log("todo ok");
                let links = responseServer.links;
                //switchLinks(responseServer);
                cargaURLS();
                console.log(links);
                console.log(links[elId].split('/'));
                let name = links[elId].split('/');
                downloadFile(links[elId], name.slice(-1));
                preparaBoton(responseServer.links);
                
                //$('##staticBackdrop').modal('hide');

            }
        }
        var data = "nombre=" + nombre + "&correo=" + correo;
        xhttp.send(data);

    }
    function cargaURLS(){
        forma = document.getElementById('resumen');
        forma.classList.toggle('ocultar');
        links = document.getElementById('links');
        links = links.classList.toggle('ocultar');
    }
    function preparaBoton(responseLinks){
        
        let boton1 = document.getElementsByClassName("boton-descarga-1");
        let boton2 = document.getElementsByClassName("boton-descarga-2");
        let boton3 = document.getElementsByClassName("boton-descarga-3");

        
        let boton4 = document.getElementsByClassName("boton-descarga-4");
        let boton5 = document.getElementsByClassName("boton-descarga-5");
        let boton6 = document.getElementsByClassName("boton-descarga-6");
        let boton7 = document.getElementsByClassName("boton-descarga-7");
        let boton8 = document.getElementsByClassName("boton-descarga-8");
        let boton9 = document.getElementsByClassName("boton-descarga-9");
        let boton10 = document.getElementsByClassName("boton-descarga-10");
        let boton11 = document.getElementsByClassName("boton-descarga-11");
        let boton12 = document.getElementsByClassName("boton-descarga-12");
        let boton13 = document.getElementsByClassName("boton-descarga-13");

        

        boton1[0].dataset.toggle = 'null';
        boton2[0].dataset.toggle = 'null';
        boton3[0].dataset.toggle = 'null';
        
        boton4[0].dataset.toggle = 'null';
        boton5[0].dataset.toggle = 'null';
        boton6[0].dataset.toggle = 'null';
        boton7[0].dataset.toggle = 'null';
        boton8[0].dataset.toggle = 'null';
        boton9[0].dataset.toggle = 'null';
        boton10[0].dataset.toggle = 'null';
        boton11[0].dataset.toggle = 'null';
        boton12[0].dataset.toggle = 'null';
        boton13[0].dataset.toggle = 'null';

        // boton1[0].href = 'https://www.iexe.edu.mx/wp-content/uploads/2023/01/Resumen_DPP_iexe.pdf';
        // boton2[0].href = 'https://www.iexe.edu.mx/wp-content/uploads/2022/11/Resumen_Esencialismo.pdf';
        // boton3[0].href = 'https://www.iexe.edu.mx/wp-content/uploads/2023/02/Resumen_El_Ego_es_el_enemigo.pdf';

        boton1[0].href = responseLinks[0];
        boton2[0].href = responseLinks[1];
        boton3[0].href = responseLinks[2];
        
        // 3.- Ruy descomenta la siguiente línea
        boton4[0].href = responseLinks[3];
        boton5[0].href = responseLinks[4];
        boton6[0].href = responseLinks[5];
        boton7[0].href = responseLinks[6];
        boton8[0].href = responseLinks[7];
        boton9[0].href = responseLinks[8];
        boton10[0].href = responseLinks[9];
        boton11[0].href = responseLinks[10];
        boton12[0].href = responseLinks[11];
        boton13[0].href = responseLinks[12];
        
    }
    function switchLinks(respuesta){
        let aLink = document.getElementById("link-1");
        let bLink = document.getElementById("link-2");
        
        let link1 = respuesta['links'][0];
        let link2 = respuesta['links'][1];
        let link3 = respuesta['links'][2];

        // aLink.href = link1;
        // bLink.href = link2;

    }
    function downloadFile(url, fileName){
  fetch(url, { method: 'get', mode: 'no-cors', referrerPolicy: 'no-referrer' })
    .then(res => res.blob())
    .then(res => {
      const aElement = document.createElement('a');
      aElement.setAttribute('download', fileName);
      const href = URL.createObjectURL(res);
      aElement.href = href;
      // aElement.setAttribute('href', href);
      aElement.setAttribute('target', '_blank');
      aElement.click();
      URL.revokeObjectURL(href);
    });
};
  
</script>
<script>
    $('#staticBackdrop').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var elId = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        mod = modal.find('#elID');
        mod[0].value = elId;
  });
</script>
<style>
    .modal-content {
        background-color: #FFF;
    }
    #staticBackdrop .modal-header {
        background: var(--primario-azul);
        color: #FFF;
    }
    .ocultar{
        display: none;
    }
    #staticBackdrop button.enviar {
        border-radius: 27px;
        background: #0018FF;
        border: none;
        color: #FFF;
        font-weight: 600;
        font-size: 14px;
        width: auto;
        /* height: 40px; */
        box-shadow: 0px 9px 6px #0c22f526;
        padding: 10px 34px;
    }
    h5#staticBackdropLabel {
        font-size: 20px;
        font-family: var(--familia-titulos);
    }
    #staticBackdrop label {
        font-weight: bold;
        letter-spacing: 0.29px;
        margin-bottom: 0px;
        font-size: 14px;
    }
    #staticBackdrop .form-control {
        height: calc(1em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.5;
    }
    #staticBackdrop .form-control {
        border: none;
        border-radius: unset;
        border-bottom: 1px solid var(--primario-azul);
    }
    .loader {
        width: 15px;
        height: 15px;
        border: 3px solid #FFF;
        border-bottom-color: transparent;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
        /* padding-left: 10px; */
        margin-left: 9px;
        margin-top: 1px;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
</style>

<?php get_footer(); ?>