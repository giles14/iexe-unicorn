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
                    <a href="https://www.iexe.edu.mx/wp-content/uploads/2023/01/Resumen_DPP_iexe.pdf" target="_blank"><button>¡Descarga el resumen!</button></a>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="book-container text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/audiolibros-IEXE_4.png" alt="" class="img-fluid mb-3">
                    <a href="https://www.iexe.edu.mx/wp-content/uploads/2022/11/Resumen_Esencialismo.pdf" target="_blank"><button>¡Descarga el resumen!</button></a> 
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="book-container text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/audiolibros-IEXE_1.png" alt="" class="img-fluid mb-3">
                    <a href="#" target="_blank"><button disabled>Próximamente</button></a>
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
<?php get_footer(); ?>