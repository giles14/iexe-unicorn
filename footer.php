<section id="pie">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="logo-abajo mx-auto img-fluid 	d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo.svg"  alt="">
                    <img style="width:60%" class="logo-abajo mx-auto  d-none d-lg-block" id="logo-pie" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo_vertical.svg" alt="">
                    <!-- <span class="redes-sociales">SÍGUENOS EN</span> -->
                    
                </div>
                <div class="col-6 col-md-2 order-2 order-lg-1">
                    <a class="menu" href="">NOSOTROS</a>
                    <?php
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'menu_primero',
                        'menu_class' => 'menu-footer'
                    ) );
                     ?>
                    <!-- <ul>
                        <li><a href="">¿Quénes somos?</a></li>
                        <li><a href="">Nuestra comunidad</a></li>
                        <li><a href="">Bienvenido a IEXE</a></li>
                        <li><a href="">Blog & noticias</a></li>
                        <li><a href="">Sello editorial</a></li>
                    </ul> -->
                </div>
                <div class="col-6 col-md-2 order-3 order-lg-2">
                    <a class="menu" href="">PROCESOS</a>
                    <?php
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'menu_segundo',
                        'menu_class' => 'menu-footer'
                    ) );
                     ?>
                    <!-- <ul>
                        <li><a href="">Inscripciones abiertas</a></li>
                        <li><a href="">Requisitos de ingreso</a></li>
                        <li><a href="">Becas</a></li>
                        <li><a href="">Recorrido virtual</a></li>
                        <li><a href="">Bolsa de Trabajo</a></li>
                    </ul> -->
                </div>
                <div class="col-6 col-md-2 order-1 order-lg-3">
                    <a class="menu" href="">OFERTA</a>
                    <?php
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'menu_tercero',
                        'menu_class' => 'menu-footer'
                    ) );
                     ?>
                    <!-- <ul>
                        <li><a href="">Licenciaturas</a></li>
                        <li><a href="">Maestrías</a></li>
                        <li><a href="">Másters</a></li>
                        <li><a href="">Doctorado</a></li>
                        <li><a href="">Diplomado</a></li>
                        <li><a href="">Capacitaciones</a></li>
                    </ul> -->
                </div>
                <div class="col-md-3 order-4">
                    <p class="telefono-mexico buffer"><img class="whatsapp-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/wa.svg" alt=""><a target="_blank" class="telefono-whatsapp" href="https://bit.ly/3C4nwCo">55-3409-8683</a></p>
                    <p class="telefono-puebla"><img class="telefono-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/telefono.svg" alt=""><a class="telefono-mexico" href="tel:800-286-84-64">800-286-84-64</a></p>
                    <!-- <a href="mailto:informes@iexe.edu.mx" class="e-mail">informes@iexe.edu.mx</a> -->
                    <div class="iconos-redes-sociales">
                        <a target="_blank" href="https://www.facebook.com/IEXE.Universidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/facebook.svg" alt="" class="redes"></a><a target="_blank" href="https://twitter.com/IEXE_Uni"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/twitter.svg" alt="" class="redes"></a><a target="_blank" href="https://www.youtube.com/c/IexeEduMx"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/youtube.svg" alt="" class="redes"></a><a target="_blank" href="https://www.linkedin.com/school/iexeuniversidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/linkedin.svg" alt="" class="redes"></a><a target="_blank" href="https://www.instagram.com/iexe_universidad"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/instagram.svg" alt="" class="redes"></a>
                    </div>
                    <p class="direccion">Blvd. Esteban de Antuñano 2702,<br>C.P. 72160 Cd. de Puebla, México</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="sub-pie">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="informacion-importante">
                        <div class="bloque">
                        
                            <p>Todos los derechos reservados IEXE 2021.</p>
                            <?php
                            wp_nav_menu( array(
                                'container' => '',
                                'theme_location' => 'pie_principal',
                                'menu_class' => 'menu-footer',
                                'items_wrap' => '%3$s'
                            ) );
                            ?>
                        <!-- <p>Todos los derechos reservados IEXE 2021. </p> <a href="#"> Aviso de Privacidad</a> | <a href="#">Términos y condiciones</a> | <a href="#">Mapa del sitio</a> | <a href="#">Contacto</a> | -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <div id="mySidenav" class="sidenav animate__bounceInRight">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Cerrar <span>&times;</span></a>
        <a href="https://iexe.xyz/"><div class="logo">
            <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/logo.svg" alt="Logo IEXE">
        </div></a>
        <div class="menu-navegacion">
            <a class="button-primary">MENÚ</a>
            <a class="menu-movil" href="/nosotros">Acerca de IEXE</a>
            <a class="menu-movil" href="/oferta-educativa">Programas académicos</a>
                <ul class="programas-academicos">
                    <li><a href="/oferta-educativa/#licenciaturas">Licenciaturas</a></li>
                    <li><a href="/oferta-educativa/#masters">Másters</a></li>
                    <li><a href="/oferta-educativa/#maestrias">Maestrías</a></li>
                    <li><a href="/oferta-educativa/#doctorado">Doctorado</a></li>
                    <li><a href="/oferta-educativa/#capacitaciones">Capacitaciones</a></li>
                    <li><a href="/oferta-educativa/#diplomados">Diplomados</a></li>
                </ul>
            <a class="menu-movil" href="/admisiones">Admisiones</a>
            <a class="menu-movil" href="/becas">Becas</a>
            <a class="menu-movil" href="/comunidad">IEXE Comunidad</a>
        </div>
    </div>
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>     -->
<script>
    var $ = jQuery;
    $(document).ready(function(){
        // $(".oferta-bloque").click(function(){  
        //     $('.oferta-bloque').removeClass("activo");
        //     $(this).toggleClass( "activo" );
        // });
        // $("a.descubre-mas").click(function(){
        //     $('.oferta-bloque').removeClass("activo");
        //     $(this).toggleClass( "activo" );
        // });
        $(".oferta-bloque").click(function(){
            if ( $(this).hasClass('activo') ){
                $(this).removeClass('activo')
            } else {
                $('.oferta-bloque').removeClass("activo");
                $(this).addClass( "activo" );
            }

        });
        

    });
    
</script>
<script>
    $(".my-video").mouseenter(function(){
        $(this).find("video").addClass('activo');
        $(this).find('video').trigger('play').prop('muted', false);
    });
    $(".my-video").mouseleave(function(){
        $(this).find("video").removeClass('activo');
        $(this).find('video').trigger('pause');
    });
    $(".my-video").click(function(){
        $(this).find('video').trigger('play').prop('muted', false);
    });
</script>
<script>
    if($('#body#oferta\ educativa').length){
        $('.navbar').addClass('sticky');
    }else {
        $(window).scroll(function() {
        if ($(this).scrollTop() > 120) {
            $('.navbar').addClass('sticky');
        }else{
            $('.navbar').removeClass('sticky');
        }
    });
}
</script>
<script>    
    var estado_menu = false;
    var w = window.innerWidth;
    function openNav() {
        
        if(w > 800){
            document.getElementById("mySidenav").style.width = "66%";
            
        }else {
            $('nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light').addClass('sticky');
            document.getElementById("mySidenav").style.width = "100%";
            disableScroll();
        }
      
      estado_menu = true;
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      estado_menu = false;
      enableScroll();
    }

    function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; } 
  }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
</script>
<?php wp_footer(  )?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        // $('.sliding').slick({
        //     dots: true,
        // infinite: true,
        // variableWidth: false
        // });
        $('.sliding').slick({
            // prevArrow:'<i class="uil uil-angle-left-b"></i>',
            prevArrow:$("img.boton-atras"),
            nextArrow:$("img.boton-adelante")
        });
});
</script>
<script>
    var input = document.querySelector("#telefono");
    var iti = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-beca");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js",
    });
  </script>
  <script>
      $(document).ready(function(){

$('#interes button.btn.btn-primario').click(function(){     
    var nombre = $("[name='nombre']").val();
    var correo = $("[name='email']").val();
    var programa = $('input#hiddenPrograma').val();
    //var telefono = $("#telefono").val();
    var telefono = iti.getNumber(crossOriginIsolated);
    var data;           
    // var formData = new FormData(forma);
    // formData.append('telefono', String(iti.getNumber(crossOriginIsolated)));
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#interes" + "&charifaz=" + navigator.userAgent,
    success: function(data){
        console.log(data);
        if(data == true || data == "saved"){
            console.log("se salvó :)");
            $("#problemaModal").modal('show');

        }else if(data == "duplicated"){
            console.log("Ya hay un registro con este correo electrónico");
        } else{
            $("#guardadoModal").modal('show');
            
        }
    },
    error: function(data){
        console.log("No se logró contactar al servidor");
        console.log(data);
        // $("#modalFracaso").modal('show');
        // $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
    }
});
});
});
  </script>
  <div class="modal fade" id="guardadoModal" tabindex="-1" aria-labelledby="guardadoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="guardadoModalLabel">Se han registrado sus datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Nuestro equipo se pondrá en contácto con usted</p>
          <img style="height: 150px; margin: 0 auto; text-align: center; display: block;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/alegria.jpg" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="problemaModal" tabindex="-1" aria-labelledby="problemaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="problemaModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Por favor verifique que todos los campos fueron llenados y que la información proporcionada es correcta e intente de nuevo.</p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
          <img style="height: 150px; margin: 0 auto; text-align: center; display: block;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/triste.webp" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="servidorModal" tabindex="-1" aria-labelledby="servidorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="servidorModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">El servidor remoto no ha podido contactarse, le rogamos vuelva a intentarlo y si el problema persiste por favor contactenos.</p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
          <img style="height: 150px; margin: 0 auto; text-align: center; display: block;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/ira.jpg" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
			
</body>
</html>