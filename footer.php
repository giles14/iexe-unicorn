<?php 
    $elOrigen = 'no-conocido';
    if(is_page_template('academicos.php')){
        $elOrigen = 'formulario-interesado-carrera';
    }elseif(is_home()) {
        $elOrigen = 'formulario-home-conocer';
    }elseif(is_page_template('comunidad.php')){
        $elOrigen = 'formulario-comunidad';
    }
?>
<section id="pie">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo get_home_url(); ?>"><img class="logo-abajo mx-auto img-fluid 	d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo.svg"  alt=""></a>
                    <a href="<?php echo get_home_url(); ?>"><img style="width:60%" class="logo-abajo mx-auto  d-none d-lg-block" id="logo-pie" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo_vertical.svg" alt=""></a>
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
                </div>
                <div class="col-md-3 order-4">
                    <p class="telefono-mexico buffer"><img class="whatsapp-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/wa.svg" alt=""><a target="_blank" class="telefono-whatsapp" href="https://bit.ly/3uOB6Hv"> 55-6814-0690</a></p>
                    <p class="telefono-puebla"><img class="telefono-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/telefono.svg" alt=""><a class="telefono-mexico" href="tel:800-286-84-64">800-286-84-64</a></p>
                    <!-- <a href="mailto:informes@iexe.edu.mx" class="e-mail">informes@iexe.edu.mx</a> -->
                    <div class="iconos-redes-sociales">
                        <a target="_blank" href="https://www.facebook.com/IEXE.Universidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/facebook.svg" alt="" class="redes"></a><a target="_blank" href="https://twitter.com/IEXE_Uni"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/twitter.svg" alt="" class="redes"></a><a target="_blank" href="https://www.youtube.com/channel/UCz2KnWwPWPbQ4GTYuqqAGqQ"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/youtube.svg" alt="" class="redes"></a><a target="_blank" href="https://www.linkedin.com/school/iexeuniversidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/linkedin.svg" alt="" class="redes"></a><a target="_blank" href="https://www.instagram.com/iexe_universidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/instagram.svg" alt="" class="redes"></a><a target="_blank" href="https://open.spotify.com/show/0UL42ohKAgBn2Sdse3VV5J"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/spotify.svg" alt="" class="redes"></a><a target="_blank" href="https://vm.tiktok.com/ZMRoQFFQC/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/tiktok.svg" alt="" class="redes"></a>
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
                        
                            <p>Todos los derechos reservados IEXE 2022.
                            <?php
                            echo strip_tags(
                                wp_nav_menu( array(
                                    'container' => false,
                                    'echo' => false,
                                    'theme_location' => 'pie_principal',
                                    'menu_class' => 'menu-footer',
                                    'depth' => 0,
                                    'items_wrap' => '%3$s',
                                ) ), '<a>');
                            ?>
                            </p>
                        <!-- <p>Todos los derechos reservados IEXE 2021. </p> <a href="#"> Aviso de Privacidad</a> | <a href="#">Términos y condiciones</a> | <a href="#">Mapa del sitio</a> | <a href="#">Contacto</a> | -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
            
    <?php // if(is_page_template('academicos.php') || is_page_template('admisiones.php')){ 
        if(FALSE){ 
        ?>                           
						<div style="color: #FBB4F8;" class="inscribete-ya">
                            <div class="cerrar-inscribete-ya"><a>Cerrar [X]</a></div>
                            <a href="https://bit.ly/iexeANU" target="_blank">
                            <h3 style="color: #FFF;">¡Da el sí a tu futuro profesional y obtén una beca!</h3>
                            <!-- <p class="postulate">Del 18 al 30 de junio, postulate ahora</p> ¡Da click ahora!</a>-->
                            <button class="btn btn-primario mb-2 mt-2 rosa"> ¡HAZ MATCH! </button>
                            <p class="condiciones">*Válido únicamente del 11 al 17 de Febrero de 2022. Aplica para inscritos de nuevo ingreso en licenciaturas, maestrías o másteres. <br> *Se aplican restricciones, contáctanos para más información.</p>
                        </div>
                        </a>

                        <?php
                        }
    ?>
                    <script>
                        jQuery(document).ready(function(){
                            jQuery(window).scroll(function(){
                                if(jQuery(document).scrollTop() > 300){
                                     jQuery(".inscribete-ya").fadeIn("fast");
                                }
                                });
                                jQuery(window).scroll(function(){
                                if(jQuery(window).scrollTop() < 300){
                                    jQuery(".inscribete-ya").fadeOut("fast");
                                }
                            });
                        });
                        jQuery(document).ready(function(){
                            jQuery(".cerrar-inscribete-ya a").click(function(){
                                jQuery(".inscribete-ya").hide();
                            });
                        });
                    
                    </script>
                    <?php if(is_page_template('academicos.php')){ ?>
                    <script>
                            jQuery(document).ready(function(){
                            jQuery('span.rotate').textrotator({
                                animation: "dissolve",
                                speed: 8000
                            });
                        });
                    </script>
                    <?php } ?>
    <div id="mySidenav" class="sidenav animate__bounceInRight"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Cerrar <span>&times;</span></a>
        <a class="d-none d-sm-block" href="<?php home_url(); ?>"><div class="logo">
            <i class="fas fa-home"></i>
            <!-- <img src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/logo.svg" alt="Logo IEXE"> -->
        </div></a>
        <div class="menu-navegacion">
            <a class="button-primary">MENÚ</a>
            <div class="contenedor-menu">
                <a class="menu-movil" href="/nosotros">Acerca de IEXE</a>
                <a class="menu-movil" href="/oferta-educativa">Oferta educativa</a>
                    <ul class="programas-academicos">
                        <li><a href="/oferta-educativa/#licenciaturas">Licenciaturas</a></li>
                        <li><a href="/oferta-educativa/#maestrias">Maestrías</a></li>
                        <li><a href="/oferta-educativa/#doctorado">Doctorados</a></li>
                        <li><a href="/oferta-educativa/#masters">Masters</a></li>
                        <li><a href="/oferta-educativa/#diplomados">Diplomados</a></li>
                        <li><a href="/capacitaciones/">Capacitaciones</a></li>
                    </ul>
                <a class="menu-movil" href="/admisiones">Admisiones</a>
                <a class="menu-movil" href="/becas">Becas</a>
                <a class="menu-movil" href="/comunidad">IEXE Comunidad</a>
                <a class="menu-movil" href="/blog">Blog y noticias</a>
            </div>
        </div>
    </div>
    <div id="accesos" class="accesosPanel animate__bounceInRight"> 
        <a href="javascript:void(0)" class="closebtn" onclick="cierraAccesos()">Cerrar <span>&times;</span></a>
        <a class="d-none d-sm-block" href="<?php home_url(); ?>"><div class="logo">
            <i class="fas fa-home"></i>
            <!-- <img src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/logo.svg" alt="Logo IEXE"> -->
        </div></a>
        <div class="menu-navegacion">
            <a class="button-primary">ACCESOS</a>
            <div class="contenedor-menu">
                <a class="menu-movil" target="_blank" href="https://alumnos.iexe.edu.mx/">Alumnos</a>
                <a class="menu-movil" target="_blank" href="https://docentes.iexe.edu.mx">Docentes</a>
                <!-- <a class="menu-movil" target="_blank" href="https://develop.redisoft.dev">Colaboradores</a> -->
                <a class="menu-movil" target="_blank" href="https://talento.iexe.edu.mx">Comercial</a>
            </div>
        </div>
    </div>
    <div id="overlay-menu"></div>
<script>
    var $ = jQuery;
    $(document).ready(function(){
        $(".oferta-bloque").click(function(){
            if($(this).hasClass('activo')){
                if($('.links-programas ul li > a').parent().click()){
                    $(this).removeClass('activo');
                }

            }else 
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
    if($(window).width() < 540){
        $('.navbar').addClass('sticky');
    }
    if($('#body#oferta\ educativa').length){
        $('.navbar').addClass('sticky');
    }else {
        $(window).scroll(function() {
        if ($(this).scrollTop() > 60 || $(window).width() < 540) {
            $('.navbar').addClass('sticky');
        }else{
            if($(window).width() > 540){
                $('.navbar').removeClass('sticky');
            }
            
        }
    });
}
</script>
<script>    
    var estado_menu = false;
    const menu = document.getElementById("mySidenav");
    const acceso = document.getElementById("accesos");
    const overlay = document.getElementById('overlay-menu');
    var w = window.innerWidth;
    window.addEventListener('resize', function () { 
        "use strict";
        w = window.innerWidth; 
        console.log("se hizo resize");
    });
    function openNav() {
        
        if(w > 800){
            // document.getElementById("mySidenav").style.width = "66%";
            menu.style.width = "66%";
            overlay.style.display = "block";
            disableScroll();
        }else {
            $('nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light').addClass('sticky');
            // document.getElementById("mySidenav").style.width = "100%";
            menu.style.width = "100%";
            disableScroll();
        }
      
      estado_menu = true;
    }
    
    function closeNav() {
      menu.style.width = "0";
      estado_menu = false;
      enableScroll();
      overlay.style.display = "none";
    }
    function abreAccesos() {
        
        if(w > 800){
            // document.getElementById("mySidenav").style.width = "66%";
            acceso.style.width = "66%";
            overlay.style.display = "block";
            disableScroll();
        }else {
            $('nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light').addClass('sticky');
            // document.getElementById("mySidenav").style.width = "100%";
            acceso.style.width = "100%";
            disableScroll();
        }
    }
    
    function cierraAccesos() {
      acceso.style.width = "0";
      enableScroll();
      overlay.style.display = "none";
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
    $(document).mouseup(function(e) 
        {
            var container = $("#mySidenav");
            var acceso = $("#accesos")

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) 
            {
                closeNav();
                cierraAccesos();
            }
        });

</script>
<?php wp_footer(  )?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_es.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        // $('.sliding').slick({
        //     dots: true,
        // infinite: true,
        // variableWidth: false
        // });
        $('.sliding').slick({
            prevArrow:$("img.boton-atras"),
            nextArrow:$("img.boton-adelante")
        });
});
</script>
<script>
// $(document).ready(function(){
    var input = document.querySelector("#telefono");
    var iti = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
// });
  </script>
  <?php  if(is_page_template('home.php')){ ?>
  <script>
      $(document).ready(function(){

$('#interes button.btn.btn-primario').click(function(){    
    $('#interes button.btn.btn-primario').removeClass("error exito"); 
    $('#interes button.btn.btn-primario').attr("disabled", true);
    var nombre = $("[name='nombre']").val();
    var correo = $("[name='email']").val();
    var origen = '<?php echo $elOrigen; ?>';
    var idConvenio = '';
    if($("[name='convenios']").val()){
        var idConvenio =  $("[name='convenios'] option:selected").val()
    }
    
    if($('input#hiddenPrograma').val()){
        var programa = $('input#hiddenPrograma').val();
        console.log(programa);
    }else{
        var programa = $("[name='programa']").val();
        console.log(programa);
    }
    var telefono = iti.getNumber(crossOriginIsolated);
    var data;           
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#interes" + "&charifaz=" + navigator.userAgent + "&adicional=origen:%20" + origen + "&idConvenio=" + parseInt(idConvenio),
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
    }
});
});
});
  </script>
  <?php } ?>
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
          <i class="far fa-check-circle"></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primario" data-dismiss="modal">Cerrar</button>
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
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="duplicadoModal" tabindex="-1" aria-labelledby="duplicadoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="duplicadoModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Sus datos ya se encuentran almacenados en el sistema si lo desea, puede contactarnos directamente a nuestro whastapp:<a href="https://bit.ly/3p4NXV9"><img style="width: 25px; margin-top:5px;" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/whatsapp.png" alt=""></a> <a target="_blank" href="https://bit.ly/3p4NXV9" style="color: #FFF; color: cyan; margin-top: 5px; display: block;">+52 222-460-35-89</a></p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
          
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="grid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col text-white">
            <div class="contenedor-modal">
            <h2 class="text-center mb-5 mt-4">¿Tienes alguna duda?</h2>
            <p>Aqui te ofrecemos toda la información que necesites sobre:</p>
            <p>
                <ul>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos/educacion.png" alt=""> Becas académicas</li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos/ordenador.png" alt="">Inscripciones</li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos/libros.png" alt="">Oferta académica y planes de estudio</li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos/backpack.png" alt="">Nuestra comunidad</li>
                </ul>
            </p>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/x-layout.svg" alt="" class="lay-fondo">
          </div>
          <div class="col">
            <div class="contenedor-modal pe-5 ps-5">
            <p>¡Estamos para ayudarte! Déjanos tus datos y un asesor educativo se pondrá en contacto contigo.</p>
            <form id="contacto"  onsubmit="event.preventDefault(); enviarFormulario(this)"  data-origen="formulario popup" action="">
                        <div class="form-group">
                          <label for="nombre">Nombre completo*</label>
                          <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico*</label>
                            <input name="email" type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono móvil*</label>
                            <input name="telefono" type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono-pop"></div>
                        
                        <div class="form-group">
                            <label for="programa-interes">Selecciona un programa</label>
                            <select class="form-control" name="programa" id="programa-interes">
                        <option value="SINA">Seleccionar Programa</option>
                        <optgroup label="Licenciaturas">              
                            <option value="LCP">Ciencias Políticas y Administración Pública</option>
                            <option value="LSP">Seguridad Pública</option>
                            <option value="LAE">Administración de Empresas</option>
                            <option value="LD">Derecho</option>
                        </optgroup>          
                        <optgroup label="Maestrías">  
                            <option value="MFP">Finanzas Públicas</option>
                            <option value="MAPP">Administración y Políticas Públicas</option>
                            <option value="MEPP">Evaluación de Políticas Públicas</option>
                            <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                            <option value="MBAT">Administración de Negocios</option>
                            <option value="MITIC">Tecnologías de la Información</option>
                        </optgroup>
                        <optgroup label="Diplomados">
                            <option value="DADFP">Alta Dirección en la Función Pública</option>
                            <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>															
                            <option value="DEPP">Evaluación de Políticas Públicas</option>																	
                            <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                            <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                            <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                        </optgroup>
                        <optgroup label="Doctorado">
                            <option value="DOC">Doctorado en Políticas Públicas</option>
                        </optgroup>
                        <optgroup label="Master">
                            <option value="MIGE">Innovación y Gestión Educativa</option>
                            <option value="MCDA">Ciencia de Datos Aplicada</option>
                            <option value="MAIS">Administración de Instituciones de Salud</option>
                            <option value="MAG">Auditoria Gubernamental</option>
                            <option value="MMPOP">Marketing Político y Opinión Pública</option>
                            <option value="MGPM">Gestión Pública Municipal</option>
                            <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral</option>
                        </optgroup>
                    </select>                        
                    </div>
                    <p class="terminos">Al hacer clic en “CONTINUAR”, reconoces haber leído las Políticas de Privacidad y confirmas estar de acuerdo con el uso de ellas, así como los Términos y Condiciones del sitio</p>
                    <button type="submit" class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right">Enviar datos<div class="ld ld-ring ld-spin"></div></button>                            
                    </form>
            </div>
          </div>
        </div>   
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div> -->
    </div>
  </div>
</div>
<style>
    #grid .modal-content {
    background: linear-gradient(90deg, rgba(0,30,66,1) 50%, rgba(255,255,255,1) 50%);
    box-shadow: 0px 9px 18px #0C22F55C;
    outline: unset;
    overflow: hidden;
    outline: 0px;
    border: 1px;
}
#grid .modal .close {
    color: red;
    opacity: 1;
}
#grid .close{
    float: right;
    font-size: 18px;
    font-weight: 100;
    line-height: 0.5;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    letter-spacing: -2px; 
}
#grid h2 {
    font-family: 'aktiv-grotesk-extended';
    font-size: 24px;
    font-weight: 200;
}
#grid p {
    font-family: 'Nunito Sans';
    font-weight: 300;
    font-size: 20px;
    letter-spacing: 0.38px;
}
.contenedor-modal {
    padding: 38px;
    position: relative;
}
.lay-fondo{
    bottom: -30px;
    position: absolute;
    right: 14px;
}
#grid #contacto .form-control {
    border: none;
    border-radius: unset;
    border-bottom: 1px solid var(--primario-azul);
    background: #FFF;
}
#grid p.terminos {
    font-size: 16px;
}
#grid ul li {
    font-size: 24px;
    font-weight: 200;
    margin-bottom: 12px;
    list-style: none;
}
#grid button.enviar-landing.btn.sin-form.btn-primario.mt-3.ld-ext-right {
    text-align: center;
    margin: 0 auto;
    display: block;
}
#grid ul {
    margin-block-start: 0px;
    padding-inline-start: 10px;
}
#grid ul img {
    margin-right: 12px;
}
a.solicitar-info{
    border: 1px solid;
    border-radius: 5px;
    padding: 5px 25px!important;
    margin-top: 15px;
    margin-left: 35px;
}
nav.navbar.sticky .navegacion-botones {
    color: #FFF;
    margin: 0 3% 0 10%;
    font-weight: 300;
    transition: all 0.5s ease-out;
}
.navegacion-botones {
    color: #FFF;
    margin: 0 3% 0 10%;
    font-weight: 300;
}
.navegacion-botones a {
    text-decoration: none;
    color: #fff;
    float: left;
    padding: 18px 10px;
    margin-left: 25px;
}
input#mi-busqueda {
    font-size: 16px;
    padding: 5px;
    border: none;
    border-radius: 0;
    background: rgba(0,30,66,0.01);
    /* border-bottom: 1px solid #FFF; */
    background-image: url(https://iexe.xyz/busqueda/content/buscar.svg);
    background-repeat: no-repeat;
}
#grid .close {
    background: blue;
    border-radius: 25px;
    opacity: 1;
    color: #FFF;
    font-size: 20px;
    margin: 0px;
}
div#navbarSupportedContent {
    flex-direction: row-reverse;
}
@media (max-width: 1199px){
nav.navbar.sticky .navegacion-botones {
    margin: 0 0% 0 0%;
}}
@media (max-width: 995px){
nav.navbar.sticky .navegacion-botones {
    margin: 0 0% 0 0%;
}
.navegacion-botones {
    color: #FFF;
    margin: 0px 3% 0 3%;
    font-weight: 300;
}
.navegacion-botones a {
    margin-left: 25px;
}
}
</style>
<script>
    var inputing = document.querySelector("#telefono-pop");
    var iti = window.intlTelInput(inputing, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
</script>
</body>
</html>