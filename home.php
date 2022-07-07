<?php get_header( ); ?>
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
                            <a href="https://bit.ly/3I4QqoR"><img class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_AWS_iexe.webp" alt="AWS academy"></a>
                            <a href="https://bit.ly/3I4QqoR"><img class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slide_R-IEXE-AWS.webp" alt="AWS academy"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="/oferta-educativa/#licenciaturas"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider_TecnologiasIEXE.webp" alt="Somos tecnología"></a>
                            <a href="/oferta-educativa/#licenciaturas"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slide_r-tech-iexe.webp" alt="Somos tecnología"></a>
                      </div>
                        <div class="carousel-item">
                            <a href="https://bit.ly/3NFUkYX"><img class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide_Recomienda-Gana_iexe.webp" alt="AWS academy"></a>
                            <a href="https://bit.ly/3NFUkYX"><img class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-r_Recomienda-Gana_iexe.webp" alt="AWS academy"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado.webp" alt="Doctorado slide"></a>
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado-mobile.webp" alt="Doctorado slide"></a>
                        </div>
                      <!-- <div class="carousel-item active">
                            <a href="/oferta-educativa/#licenciaturas"><img class="w-100 d-none d-sm-block" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-somos.webp" alt="Somos Slide"></a>
                            <a href="/oferta-educativa/#licenciaturas"><img class="d-block d-sm-none w-100" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-somos-mobil.webp" alt="Somos Slide"></a>
                      </div> -->
                      <!-- <div class="carousel-item">
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado.webp" alt="Doctorado slide"></a>
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado-mobile.webp" alt="Doctorado slide"></a>
                      </div> -->
                      <!-- <div class="carousel-item">
                            <a href="https://bit.ly/iexeBNA" target="_blank"><img loading="lazy" class="w-100 d-none d-sm-block" src="https://iexe.edu.mx/wp-content/uploads/2021/12/slider-2022.webp" alt="Promo Año Nuevo"></a>
                            <a href="https://bit.ly/iexeBNA" target="_blank"><img loading="lazy" class="d-block d-sm-none w-100" src="https://iexe.edu.mx/wp-content/uploads/2021/12/slider-2022-movil.webp" alt="Promo Año Nuevo"></a>
                      </div> -->
                      <!-- <div class="carousel-item">
                            <a href="/editorial"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-ddpp.webp" alt="Libro diseño de políticas públicas slide"></a>
                            <a href="/editorial"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-ddpp-mobile.webp" alt="Libro diseño de políticas públicas slide"></a>
                      </div> -->
                      <div class="carousel-item">
                            <a href="/comunidad"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider_internacional.webp" alt="Diplomado slide"></a>
                            <a href="/comunidad"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-somos-internacional.webp" alt="Diplomado slide"></a>
                      </div>
                      
                      <!-- <div class="carousel-item">
                            <a target="_blank" href="https://bit.ly/iexaWHA"><img loading="lazy" class="w-100 d-none d-sm-block" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide_iexalumno.webp" alt="IEXALUMNO Slide"></a>
                            <a target="_blank" href="https://bit.ly/iexaWHA"><img loading="lazy" class="d-block d-sm-none w-100" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide_iexalumno_movil.webp" alt="IEXALUMNO Slide"></a>
                      </div> -->
                      
                      
                      <!-- <div class="carousel-item">
                        <a href="/becas"><img class="w-100 d-none d-sm-block" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-embajador.webp" alt="Embajadores Slide"></a>
                            <a href="/becas"><img class="d-block d-sm-none w-100" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-embajador-mobile.webp" alt="Embajadores Slide"></a>
                      </div> -->
                      <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="<?php // echo get_template_directory_uri() ?>/assets/img/sliderGde.png" alt="Third slide">
                      </div> -->
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
    <section id="oferta-educativa" class="mt-xs-4" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="/oferta-educativa/"><h1 class="titulo">Oferta educativa</h1></a>
					<h2 class="description">Conoce nuestros programas <strong>100% en línea.</strong> ¡Desarróllate, especialízate y concreta tu futuro profesional!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
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
                <div class="col-12 col-md-4">
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
                <div class="col-12 col-md-4">
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
                <div class="col-12 col-md-4">
                    <div class="oferta-bloque mas">
                        <div class="informa">
                            <a class="button-primary">MASTERS</a>
                            <a class="descubre-mas" disabled>Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/maestria-en-marketing-politico-y-opinion-publica/">Marketing Político y Opinión Pública</a></li>
                                    <li><a href="oferta-educativa/maestria-en-auditoria-gubernamental">Auditoría Gubernamental</a></li>
                                    <li><a href="oferta-educativa/maestria-en-sistema-penal-acusatorio-y-juicio-oral/">Sistema Penal Acusatorio <br>y Juicio Oral </a></li>
                                    <li><a href="oferta-educativa/maestria-en-gestion-publica-municipal/">Gestión Pública Municipal</a></li>
                                                                                                 
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-4">
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
                <div class="col-12 col-md-4">
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
                    <a href="/admisiones"><img loading="lazy" class="d-none d-sm-block img-fluid banners" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_home.webp" alt=""></a>
                    <a href="/admisiones"><img loading="lazy" class="d-block d-sm-none img-fluid banners" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_home_movil.webp" alt=""></a>
                </div>
            </div>
        </div>
    </section>
     <section id="blog">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
            <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'principal',
                                                    'posts_per_page' => 1
                
                                            ) ); ?>
                <div class="col-10 offset-1">
                     <div class="bloque-moderno izquierda">
                        <!--<div class="bloque-azul">    
                        </div>
                            <div class="bloque-neon">
                                <h3 class="titulos">Hablemos de...</h3>
                            </div> -->
                            <a href="/blog" class="button-primary">En el blog IEXE, hablamos de...</a>
                    </div>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
            ?>
            <div class="row quick-quit">
                    <div class="col-md-1 align-self-center">
                        <div class="boton-izquierdo"> <!-- <a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-izquierda.png" alt=""></a> --></div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="imagen-blog">
                            <?php the_post_thumbnail('destacada-archivo', array('class' => 'img-fluid')); ?>
                            <!-- <img loading="lazy" src="<?php// echo esc_url(get_template_directory_uri()) ?>/assets/img/convenio-haya.webp" alt="" class="img-fluid"> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="autor d-none d-sm-block">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/alexandro.webp" alt="" class="autor-foto">
                            <div class="meta-informacion">
                                <span class="nombre">Alexandro Giles</span>
                                <span class="redes">Experto TI</span>
                            </div>
                            
                        </div>
                        <div class="post">
                            <a href="<?php the_permalink() ?>"><h2 class="titulo"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></h2></a>
                            <div class="entrada">
                                <a href="<?php the_permalink() ?>"><p><?php echo get_the_excerpt() ?></p></a>
                            </div>
                            <div class="iconos">
                                <!-- <i class="fas fa-heart primero"></i>90<i class="fas fa-comment-alt"></i>78<i class="fas fa-sync-alt"></i>12<i class="fas fa-bookmark ultimo"></i>34 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 align-self-center">
                        <div class="boton-derecha"><!-- <a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-derecha.png" alt=""></a> --></div>
                    </div>

            </div>
        </div>
        </div>
        <?php 
                endwhile;
                wp_reset_postdata();
                ?>
    </section>
    <?php get_template_part( 'template-parts/banderas'); ?>
    <?php get_template_part( 'template-parts/vinculos'); ?>
    <style>
        .miniban{
            margin: 10px 0px;
            padding: 0px 12px;
        }
    </style>
    <?php get_footer( ); ?>