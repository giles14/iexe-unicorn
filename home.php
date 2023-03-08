<?php get_header( ); ?>
<?php 
$banner = get_field('banner_pagina_principal', 3505);
$bannerMovil = get_field('banner_pagina_principal_movil', 3505);
?>
<section id="slider">
        <div class="container-fluid">
            <div class="row">
                <div id="slidePrincipal" class="carousel slide w-100 carousel-fade" data-ride="carousel">
                    <div class="wrapper">
                        <ol class="carousel-indicators d-none d-md-block">
                            <li data-target="#slidePrincipal" data-slide-to="0" class="active"></li>
                            <li data-target="#slidePrincipal" data-slide-to="1"></li>
                            <li data-target="#slidePrincipal" data-slide-to="2"></li>
                            <li data-target="#slidePrincipal" data-slide-to="3"></li>
                            <li data-target="#slidePrincipal" data-slide-to="4"></li>
                            <li data-target="#slidePrincipal" data-slide-to="5"></li>
                        </ol>
                    </div>
                
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                            <a href="https://www.youtube.com/channel/UCSxRuy1NuIO5qPULWp_I7EQ" target="_blank"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_YouTube_rev.webp" alt="Canal de Youtube"></a>
                            <a href="https://www.youtube.com/channel/UCSxRuy1NuIO5qPULWp_I7EQ" target="_blank"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider-R-IEXE_YouTube_rev.webp" alt="Canal de Youtube"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.amazon.com.mx/Evaluaci%C3%B3n-Pol%C3%ADticas-P%C3%BAblicas-evaluaciones-inteligentes/dp/6078571168/ref=sr_1_7?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1UF59QUPIICAT&keywords=julio+franco+corzo&qid=1668544502&qu=eyJxc2MiOiIyLjAyIiwicXNhIjoiMS40MSIsInFzcCI6IjEuMTUifQ%3D%3D&s=books&sprefix=julio+franco+corzo%2Cstripbooks%2C118&sr=1-7" target="_blank"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/evaluacion-politicas-pub-ama.webp" alt="Nuevo libro"></a>
                            <a href="https://www.amazon.com.mx/Evaluaci%C3%B3n-Pol%C3%ADticas-P%C3%BAblicas-evaluaciones-inteligentes/dp/6078571168/ref=sr_1_7?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1UF59QUPIICAT&keywords=julio+franco+corzo&qid=1668544502&qu=eyJxc2MiOiIyLjAyIiwicXNhIjoiMS40MSIsInFzcCI6IjEuMTUifQ%3D%3D&s=books&sprefix=julio+franco+corzo%2Cstripbooks%2C118&sr=1-7" target="_blank"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/evaluacion-politicas-pub-mov-ama.webp" alt="Nuevo libro"></a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a href="https://bit.ly/3Ya2gqy" target="_blank"><img loading="lazy" class="w-100 d-none d-sm-block" src="https://www.iexe.edu.mx/wp-content/uploads/2022/12/slide-conexiones-libro-andere-scaled.webp" alt="Conexiones y equilibrios"></a>
                            <a href="https://bit.ly/3Ya2gqy" target="_blank"><img loading="lazy" class="d-block d-sm-none w-100" src="https://www.iexe.edu.mx/wp-content/uploads/2022/12/slide-conexiones-libro-andere-2-copy.webp" alt="Conexiones y equilibrios"></a>
                        </div> -->
                        <div class="carousel-item">
                            <a href="#"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/somos_digitales_rev.webp" alt="Somos digitales"></a>
                            <a href="#"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_R-IEXE-100_digitales_rev.webp" alt="Somos digitales"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_DoctoradoPP.webp" alt="Doctorado slide"></a>
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_DoctoradoPP_movil.webp" alt="Doctorado slide"></a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a href="https://bit.ly/3NFUkYX"><img class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide_Recomienda-Gana_iexe.webp" alt="AWS academy"></a>
                            <a href="https://bit.ly/3NFUkYX"><img class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-r_Recomienda-Gana_iexe.webp" alt="AWS academy"></a>
                        </div> -->
                        <!-- <div class="carousel-item">
                            <a href="/oferta-educativa/#licenciaturas"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_TecnologiasIEXE.webp" alt="Somos tecnología"></a>
                            <a href="/oferta-educativa/#licenciaturas"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slide_r-tech-iexe.webp" alt="Somos tecnología"></a>
                        </div> -->
                        <div class="carousel-item">
                            <a href="https://bit.ly/3I4QqoR"><img class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_AWS_iexe.webp" alt="AWS academy"></a>
                            <a href="https://bit.ly/3I4QqoR"><img class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slide_R-IEXE-AWS.webp" alt="AWS academy"></a>
                        </div>
                      <div class="carousel-item">
                            <a href="/comunidad"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider_internacional.webp" alt="Diplomado slide"></a>
                            <a href="/comunidad"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-somos-internacional.webp" alt="Diplomado slide"></a>
                      </div>
                      <div class="carousel-item">
                            <a href="#"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/recomienda_gana_slide.webp" alt="Recomienda y gana"></a>
                            <a href="#"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/recomienda_gana_slideR.webp" alt="Recomienda y gana"></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slidePrincipal" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#slidePrincipal" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
        
    </section>
    <section id="oferta-educativa" class="mt-xs-4" style="min-height: 1053px;">
        <div class="container">
            <div class="row">
                <div class="col" style="min-height: 97px;">
                    <a href="/oferta-educativa/"><h1 class="titulo">Oferta educativa</h1></a>
					<h2 class="description">Conoce nuestros programas <strong>100% en línea.</strong> ¡Desarróllate, especialízate y concreta tu futuro profesional!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div class="oferta-bloque lic">
                        <div class="informa">
                            <a class="button-primary">LICENCIATURAS</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/licenciatura-en-seguridad-publica/licenciatura-en-seguridad-publica">Seguridad Pública</a></li>
                                    <li><a href="oferta-educativa/licenciatura-en-ciencias-politicas-y-administracion-publica/">Ciencias Políticas y Administración Pública</a></li>
                                    <li><a href="oferta-educativa/licenciatura-en-derecho/">Derecho</a></li>
                                    <li><a href="oferta-educativa/licenciatura-en-administracion-de-empresas/">Administración de Empresas</a></li>                                    
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div id="maestro" class="oferta-bloque mae">
                        <div class="informa">
                            <a class="button-primary">MAESTRÍAS</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas maestrias">
                                <ul>
                                    <li><a href="oferta-educativa/maestria-en-seguridad-publica-y-politicas-publicas">Seguridad Pública y Políticas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-y-politica-publicas">Administración y Políticas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-evaluacion-de-politicas-publicas">Evaluación de Políticas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-finanzas-publicas">Finanzas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-de-negocios-mba/">Administración de Negocios (MBA)</a></li>
                                    <li><a href="oferta-educativa/maestria-en-ingenieria-en-tecnologias-de-la-informacion/">Ingeniería en Tecnologías de la Información</a></li>
                                    <li><a href="oferta-educativa/maestria-en-innovacion-y-gestion-educativa">Innovación y Gestión Educativa</a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-de-instituciones-de-salud">Administración de Instituciones de Salud</a></li>
                                    <li><a href="oferta-educativa/maestria-en-ciencia-de-datos-aplicada/">Ciencia de Datos Aplicada</a></li>    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div id="maestro" class="oferta-bloque doc">
                        <div class="informa">
                            <a class="button-primary">DOCTORADOS</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/doctorado-en-politicas-publicas">Políticas Públicas</a></li>                                
                                    <li><a href="oferta-educativa/doctorado-en-seguridad-publica">Seguridad Pública</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div class="oferta-bloque mas">
                        <div class="informa">
                            <a class="button-primary">MÁSTERES</a>
                            <a class="descubre-mas" disabled>Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/maestria-en-marketing-politico-y-opinion-publica/">Marketing Político y Opinión Pública</a></li>
                                    <li><a href="oferta-educativa/maestria-en-auditoria-gubernamental">Auditoría Gubernamental</a></li>
                                    <li><a href="oferta-educativa/maestria-en-sistema-penal-acusatorio-y-juicio-oral/">Sistema Penal Acusatorio <br>y Juicio Oral </a></li>
                                    <li><a href="oferta-educativa/maestria-en-gestion-publica-municipal/">Gestión Pública Municipal</a></li>
                                </ul>
                            </div>
                            <div class="nota-rvoe">
                                <p>Estudios sin reconocimiento de<br> validez oficial (RVOE en trámite).</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div class="oferta-bloque dip">
                        <div class="informa">
                            <a class="button-primary">DIPLOMADOS</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <!-- <li><a href="/oferta-educativa/diplomado-en-disciplina-financiera-y-fiscalizacion/">Disciplina Financiera y Fiscalización</a> </li> -->
                                    <li><a href="/oferta-educativa/diplomado-en-habilidades-gerenciales-y-liderazgo/">Habilidades Gerenciales y Liderazgo</a> </li>
                                    <li><a href="/oferta-educativa/diplomado-en-presupuesto-basado-en-resultados/">Presupuesto basado en Resultados (PbR)</a> </li>
                                    <li><a href="/oferta-educativa/diplomado-en-analisis-y-diseno-y-de-politicas-publicas/">Análisis y Diseño de Políticas Públicas</a> </li>
                                    <!-- <li><a href="/oferta-educativa/diplomado-en-fundamentos-de-administracion-publica/">Fundamentos de Administración Pública</a></li> -->
                                    <li><a href="/oferta-educativa/diplomado-en-alta-direccion-en-la-funcion-publica/">Alta Dirección en la Función Pública</a></li>                                    
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-4" style="min-height: 431px;">
                    <div class="oferta-bloque cap">
                        <div class="informa">
                            <a class="button-primary">CAPACITACIONES</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="/capacitaciones/">Programas de capacitación para el sector público y privado</a></li>                                    
                                </ul>
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
            
            
        </div>
        
    </section>
    <section class="d-none d-sm-block" id="info-primaria">
        <div class="container" style="position: relative;">
            <video width="1140" height="420" autoplay muted loop style="position: absolute;top: 0;left: 0;border-radius: 15px;">
                        <source src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/video/video4.m4v" type="video/mp4" muted>
                        El navegador no acepta video
            </video>
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="/oferta-educativa">
                    <div class="boton-slide d-flex">
                        <span>Educación a distancia</span>
                    </div>
                    </a>
                    <a href="/blog/validez-internacional-a-titulos-expedidos-por-iexe-universidad/">
                    <div class="boton-slide d-flex">
                        <span>Programas internacionales</span>
                    </div>
                    </a>
                    <a href="/becas">
                    <div class="boton-slide last d-flex">
                        <span>Becas a tu medida</span>
                    </div>
                    </a>

                </div>
                <div class="col-md-5">

                </div>
                <div class="col-md-3">
                    <!-- <p class="descripcion">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusatium doloremque</p> -->
                    <!-- <a href="#" class="descubre-mas">Descubre más</a> -->

                </div>
            </div>
        </div>

    </section>
    <section id="embajadores-iexe">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo">Embajadores IEXE</h1>
					<h2 class="description">Conoce las experiencias de nuestra comunidad y al igual que ellos, <strong>¡decídete a estudiar con nosotros!</strong></h2>
                </div>
            </div>
        </div>
        <div class="container container-plus">
            <div class="row no-gutters">
                <div class="col col-md-4 d-none d-md-block my-video primero d-none d-sm-block">
                    <div class="marco">
                        <div class="info-pre-video">
                            <a><img loading="lazy" class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt=""></a>
                            <p class="consejos">Tips para mis compañeros de maestría</p>
                        </div>
                    </div>
                    <video width="443" height="579" loop>
                        <source src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/video/alx1.m4v" type="video/mp4">
                        El navegador no acepta video
                  </video>

                </div>
                <div class="col col-md-4 my-video segundo">
                    <div class="marco">
                        <div class="info-pre-video">
                            <img loading="lazy" class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <p class="consejos">Consejos para mis próximos compañeros de doctorado</p>
                        </div>
                    </div>
                        <video width="443" height="579" muted loop>
                            <img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <source src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/video/alx2.m4v" type="video/mp4">
                            El navegador no acepta video
                      </video>
                </div>
                <div class="col col-md-4 d-none d-md-block my-video tercero d-none d-sm-block">
                    <div class="marco">
                        <div class="info-pre-video">
                            <img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <p class="consejos">Ventajas de estudiar en línea mi licenciatura</p>
                        </div>
                    </div>
                    <video width="443" height="579" muted loop>
                        <source src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/video/alx3.m4v" type="video/mp4" muted>
                        El navegador no acepta video
                  </video>

                </div>
            </div>
        </div>

    </section>
    <?php get_template_part( 'template-parts/interes'); ?>
        <a href="/comunidad"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_recta.png" alt="" class="img-fluid miniban d-none "></a>
    <?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe'); ?>
    <section id="banners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if( !empty( $banner ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($banner['url']); ?>" class="d-none d-sm-block img-fluid banners" alt="<?php echo esc_attr($banner['alt']); ?>" /></a>
                        <?php endif; ?>
                        <?php
                        if( !empty( $bannerMovil ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($bannerMovil['url']); ?>" class="d-block d-sm-none img-fluid banners" alt="<?php echo esc_attr($bannerMovil['alt']); ?>" /></a>
                        <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
     
    <?php 
       get_template_part('template-parts/blog-front'); 
    ?>
    <?php get_template_part( 'template-parts/banderas'); ?>
    <?php get_template_part( 'template-parts/vinculos'); ?>
    <style>
        .miniban{
            margin: 10px 0px;
            padding: 0px 12px;
        }
        .widget .pop-up .pop-up-circle.bubble {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
    <!-- Código de instalación Cliengo para Natalia (Prueba) --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/62e4184a6b1374002a108b4a/6318e0fc6b542e002a619720.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    <style>
#popupIframe, #chatIframe {float: left! important; right: 115px! important;}
</style>
    <?php get_footer( ); ?>