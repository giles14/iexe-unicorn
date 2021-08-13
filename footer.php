<section id="pie">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="logo-abajo mx-auto d-block" id="logo-pie" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                    <span class="redes-sociales">SÍGUENOS EN</span>
                    <div class="iconos-redes-sociales">
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/facebook.svg" alt="" class="redes"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/twitter.svg" alt="" class="redes"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/youtube.svg" alt="" class="redes"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/linkedin.svg" alt="" class="redes"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/instagram.svg" alt="" class="redes"></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="menu" href="">NOSOTROS</a>
                    <ul>
                        <li><a href="">¿Quénes somos?</a></li>
                        <li><a href="">Nuestra comunidad</a></li>
                        <li><a href="">Bienvenido a IEXE</a></li>
                        <li><a href="">Blog & noticias</a></li>
                        <li><a href="">Sello editorial</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a class="menu" href="">PROCESOS</a>
                    <ul>
                        <li><a href="">Inscripciones abiertas</a></li>
                        <li><a href="">Requisitos de ingreso</a></li>
                        <li><a href="">Becas</a></li>
                        <li><a href="">Recorrido virtual</a></li>
                        <li><a href="">Bolsa de Trabajo</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a class="menu" href="">OFERTAS</a>
                    <ul>
                        <li><a href="">Licenciaturas</a></li>
                        <li><a href="">Maestrías</a></li>
                        <li><a href="">Másters</a></li>
                        <li><a href="">Doctorado</a></li>
                        <li><a href="">Diplomado</a></li>
                        <li><a href="">Capacitaciones</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="telefono-mexico buffer"><img src="<?php echo get_template_directory_uri() ?>/assets/img/wa.svg" alt="">800-286-84-64</p>
                    <p class="telefono-puebla"><img src="<?php echo get_template_directory_uri() ?>/assets/img/telefono.svg" alt="">222-286-84-64</p>
                    <a href="mailto:informes@iexe.edu.mx" class="e-mail">informes@iexe.edu.mx</a>
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
                        <p>Todos los derechos reservados IEXE 2021. </p> <a href="#"> Aviso de Privacidad</a> | <a href="#">Términos y condiciones</a> | <a href="#">Mapa del sitio</a> | <a href="#">Contacto</a> |
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <div id="mySidenav" class="sidenav animate__bounceInRight">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Cerrar <span>&times;</span></a>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="Logo IEXE">
        </div>
        <div class="menu-navegacion">
            <a class="button-primary">MENÚ</a>
            <a href="#">Acerca de IEXE</a>
            <a href="#">Programas académicos</a>
                <ul class="programas-academicos">
                    <li><a href="#">Licenciaturas</a></li>
                    <li><a href="#">Másters</a></li>
                    <li><a href="#">Maestrías</a></li>
                    <li><a href="#">Doctorado</a></li>
                    <li><a href="#">Capacitaciones</a></li>
                    <li><a href="#">Diplomados</a></li>
                </ul>
            <a href="#">Admisiones</a>
            <a href="#">Becas</a>
            <a href="#">IEXE Comunidad</a>
        </div>
    </div>
      

    
    <!-- <div class="cards">
        <div class="card">
          <h2 class="card-title">Seal</h2>
          <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
          <p class="card-desc">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals).</p>
        </div>
    </div> -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>     -->
<script>
    $(document).ready(function(){
        $(".oferta-bloque").click(function(){  
            $('.oferta-bloque').removeClass("activo");
            $(this).toggleClass( "activo" );
        });
        $("a.descubre-mas").click(function(){
            $('.oferta-bloque').removeClass("activo");
            $(this).toggleClass( "activo" );
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
    function openNav() {
      document.getElementById("mySidenav").style.width = "66%";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script>
<?php wp_footer(  )?>
</body>
</html>