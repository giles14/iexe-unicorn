<?php /* Template Name: Comunidad */ ?>
<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo">Honoris Causa</h1>
                <h2 class="description">Elige el programa en el que deseas inscribirte para ver todo el proceso</h2>
            </div>
            <div class="col-md-3">
            </div>

            <div class="col-md-3">
                <div class="buscar"><input id="busqueda-blog" type="text" placeholder="Buscar"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ulises-garduno.jpg" alt="">
                    <h2 class="nombre">Ulises González Garduño</h2>
                    <p class="nombre-progamna">Nombre del programa hasta 2 renglones</p>
                    <span>11 Generación</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img ">
                <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/yovani-molina.jpg" alt="">
                    <h2 class="nombre">Mauricio Yovani Molina Medina</h2>
                    <p class="nombre-progamna">Nombre del programa hasta 2 renglones</p>
                    <span>11 Generación</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/cecilia-oliva.jpg" alt="">
                    <h2 class="nombre">Cecilia Nohemi Olivia Juárez</h2>
                    <p class="nombre-progamna">Nombre del programa hasta 2 renglones</p>
                    <span>11 Generación</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/alejandro-gallardo.jpg" alt="">
                    <h2 class="nombre">Alejandro A. Gallardo</h2>
                    <p class="nombre-progamna">Nombre del programa hasta 2 renglones</p>
                    <span>11 Generación</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/anuncios'); ?>
<?php get_template_part( 'template-parts/comunidad'); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer(); ?>