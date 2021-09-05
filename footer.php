<section id="pie">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img style="width:60%" class="logo-abajo mx-auto d-block" id="logo-pie" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo_vertical.svg" alt="">
                    <!-- <span class="redes-sociales">SÍGUENOS EN</span> -->
                    
                </div>
                <div class="col-md-2">
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
                <div class="col-md-2">
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
                <div class="col-md-2">
                    <a class="menu" href="">OFERTAS</a>
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
                <div class="col-md-3">
                    <p class="telefono-mexico buffer"><img class="whatsapp-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/wa.svg" alt=""><a class="telefono-whatsapp" href="https://bit.ly/2WgHHhn">222-286-84-64</a></p>
                    <p class="telefono-puebla"><img class="telefono-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/telefono.svg" alt=""><a class="telefono-mexico" href="tel:800-286-84-64">800-286-84-64</a></p>
                    <!-- <a href="mailto:informes@iexe.edu.mx" class="e-mail">informes@iexe.edu.mx</a> -->
                    <div class="iconos-redes-sociales">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/facebook.svg" alt="" class="redes"></a><a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/twitter.svg" alt="" class="redes"></a><a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/youtube.svg" alt="" class="redes"></a><a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/linkedin.svg" alt="" class="redes"></a><a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/instagram.svg" alt="" class="redes"></a>
                    </div>
                    <p class="direccion">Blvd. Esteban de Antuñano 2702,<br>C.P. 72160 Puebla. México</p>
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
                            <p>Todos los derechos reservados IEXE 2021.</p>
                            <?php
                            wp_nav_menu( array(
                                'container' => '',
                                'theme_location' => 'pie_principal',
                                'menu_class' => 'menu-footer'
                            ) );
                            ?>
                        <!-- <p>Todos los derechos reservados IEXE 2021. </p> <a href="#"> Aviso de Privacidad</a> | <a href="#">Términos y condiciones</a> | <a href="#">Mapa del sitio</a> | <a href="#">Contacto</a> | -->
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <div id="mySidenav" class="sidenav animate__bounceInRight">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Cerrar <span>&times;</span></a>
        <div class="logo">
            <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/logo.svg" alt="Logo IEXE">
        </div>
        <div class="menu-navegacion">
            <a class="button-primary">MENÚ</a>
            <a href="/nosotros">Acerca de IEXE</a>
            <a href="/oferta-educativa">Programas académicos</a>
                <ul class="programas-academicos">
                    <li><a href="/oferta-educativa/#licenciaturas">Licenciaturas</a></li>
                    <li><a href="/oferta-educativa/#masters">Másters</a></li>
                    <li><a href="/oferta-educativa/#maestrias">Maestrías</a></li>
                    <li><a href="/oferta-educativa/#doctorado">Doctorado</a></li>
                    <li><a href="/oferta-educativa/#capacitaciones">Capacitaciones</a></li>
                    <li><a href="/oferta-educativa/#diplomados">Diplomados</a></li>
                </ul>
            <a href="/admisiones">Admisiones</a>
            <a href="/becas">Becas</a>
            <a href="/comunidad">IEXE Comunidad</a>
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
        $(this).find('video').trigger('play').prop('muted', true);
    });
    $(".my-video").mouseleave(function(){
        $(this).find("video").removeClass('activo');
        $(this).find('video').trigger('pause');
    });
</script>
<script>
    $(window).scroll(function() {
    if ($(this).scrollTop() > 120) {
        $('.navbar').addClass('sticky');
    }else{
        $('.navbar').removeClass('sticky');
    }
});
</script>
<script>
    var estado_menu = false;
    function openNav() {
      document.getElementById("mySidenav").style.width = "66%";
      estado_menu = true;
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      estado_menu = false;
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
			
</body>
</html>