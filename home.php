<?php get_header( ); ?>
<section id="slider">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                            <a href="/nosotros/#el-futuro"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-somos.webp" alt="Somos Slide"></a>
                            <a href="/nosotros/#el-futuro"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-somos-mobil.webp" alt="Somos Slide"></a>
                      </div>
                      <div class="carousel-item">
                            <a href="/becas"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-embajador.webp" alt="Embajadores Slide"></a>
                            <a href="/becas"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-embajador-mobile.webp" alt="Embajadores Slide"></a>
                      </div>
                      <div class="carousel-item">
                            <a href="/oferta-educativa/#diplomados"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-ddpp.webp" alt="Libro diseño de políticas públicas slide"></a>
                            <a href="/oferta-educativa/#diplomados"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slide-ddpp-mobile.webp" alt="Libro diseño de políticas públicas slide"></a>
                      </div>
                      <div class="carousel-item">
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado.webp" alt="Doctorado slide"></a>
                            <a href="/oferta-educativa/doctorado-en-politicas-publicas/"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-doctorado-mobile.webp" alt="Doctorado slide"></a>
                      </div>
                      <div class="carousel-item">
                            <a href="/oferta-educativa/#diplomados"><img class="w-100 d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider_internacional.webp" alt="Diplomado slide"></a>
                            <a href="/oferta-educativa/#diplomados"><img class="d-block d-sm-none w-100" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-somos-internacional.webp" alt="Diplomado slide"></a>
                      </div>
                      <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="<?php // echo get_template_directory_uri() ?>/assets/img/sliderGde.png" alt="Third slide">
                      </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
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
                        <span>Estudiar a tu ritmo</span>
                    </div>
                    </a>
                    <a href="/admisiones">
                    <div class="boton-slide d-flex">
                        <span>Inscripción en línea</span>
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
    <section id="oferta-educativa">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="/oferta-educativa/"><h1 class="titulo">Programas académicos</h1></a>
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
                                    <li><a href="oferta-educativa/licenciatura-en-ciencias-politicas-y-administracion-publica/">Ciencias Políticas y Administración Pública</a></li>
                                    <li><a href="oferta-educativa/licenciatura-en-seguridad-publica/licenciatura-en-seguridad-publica">Seguridad Pública</a></li>
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
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/maestria-en-seguridad-publica-y-politicas-publicas">Seguridad Pública y Políticas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-y-politica-publicas">Administración y Política Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-evaluacion-de-politicas-publicas">Evaluación de Políticas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-finanzas-publicas">Finanzas Públicas</a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-de-negocios-mba/">Administración de Negocios (MBA)</a></li>
                                    <li><a href="oferta-educativa/maestria-en-ingenieria-en-tecnologias-de-la-informacion/">Ingeniería en Tecnologías de la Información</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div id="maestro" class="oferta-bloque doc">
                        <div class="informa">
                            <a class="button-primary">DOCTORADO</a>
                            <a class="descubre-mas">Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/doctorado-en-politicas-publicas">Políticas Públicas</a></li>                                
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
                            <a class="button-primary">MÁSTERES</a>
                            <a class="descubre-mas" disabled>Descubre más</a>
                            <div class="links-programas">
                                <ul>
                                    <li><a href="oferta-educativa/maestria-en-marketing-politico-y-opinion-publica/">Marketing Político y Opinión Pública</a></li>
                                    <li><a href="oferta-educativa/maestria-en-auditoria-gubernamental">Auditoria Gubernamental</a></li>
                                    <li><a href="oferta-educativa/maestria-en-sistema-penal-acusatorio-y-juicio-oral/">Sistema Penal Acusatorio y Juicio Oral </a></li>
                                    <li><a href="oferta-educativa/maestria-en-administracion-de-instituciones-de-salud">Administración de Instituciones de Salud</a></li>
                                    <li><a href="oferta-educativa/maestria-en-gestion-publica-municipal/">Gestión Pública Municipal</a></li>
                                    <li><a href="oferta-educativa/maestria-en-ciencia-de-datos-aplicada/">Ciencia de Datos Aplicada</a></li>
                                    <li><a href="oferta-educativa/maestria-en-innovacion-y-gestion-educativa">Innovación y Gestión Educativa</a></li>                                                                 
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
                                    <li><a href="/oferta-educativa/diplomado-en-disciplina-financiera-y-fiscalizacion/">Disciplina Financiera y Fiscalización</a> </li>
                                    <li><a href="/oferta-educativa/diplomado-en-habilidades-gerenciales-y-liderazgo/">Habilidades Gerenciales y Liderazgo</a> </li>
                                    <li><a href="/oferta-educativa/diplomado-en-analisis-y-diseno-y-de-politicas-publicas/">Análisis y Diseño de Políticas Públicas</a> </li>
                                    <li><a href="/oferta-educativa/diplomado-en-fundamentos-de-administracion-publica/">Fundamentos de Administración Pública</a></li>
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
                <div class="col col-md-4 d-none d-md-block my-video primero">
                    <div class="marco">
                        <div class="info-pre-video">
                            <a><img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt=""></a>
                            <p class="consejos">Tips para mis compañeros de nuevo ingreso</p>
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
                            <img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <p class="consejos">Consejos para mis próximos compañeros de doctorado</p>
                        </div>
                    </div>
                        <video width="443" height="579" muted loop>
                            <img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <source src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/video/alx2.m4v" type="video/mp4">
                            El navegador no acepta video
                      </video>
                </div>
                <div class="col col-md-4 d-none d-md-block my-video tercero">
                    <div class="marco">
                        <div class="info-pre-video">
                            <img class="boton-play" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/play.png" alt="">
                            <p class="consejos">Un consejo para estudiar en IEXE Universidad</p>
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
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_recta.png" alt="" class="img-fluid miniban d-block d-sm-none">
    <?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe'); ?>
    <section id="banners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/admisiones"><img class="img-fluid banners" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_home.webp" alt=""></a>
                </div>
            </div>
        </div>
    </section>
     <section id="blog">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                     <div class="bloque-moderno izquierda">
                        <!--<div class="bloque-azul">    
                        </div>
                            <div class="bloque-neon">
                                <h3 class="titulos">Hablemos de...</h3>
                            </div> -->
                            <a class="button-primary">Hablemos de...</a>
                    </div>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row quick-quit">
                    <div class="col-md-1 align-self-center">
                        <div class="boton-izquierdo"><a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-izquierda.png" alt=""></a></div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="imagen-blog">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="autor d-none d-sm-block">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/autor.png" alt="" class="autor-foto">
                            <div class="meta-informacion">
                                <span class="nombre">Miguel Hdz</span>
                                <span class="redes">@migueliexe</span>
                            </div>
                            
                        </div>
                        <div class="post">
                            <a href="/destacado/derechos-de-la-comunidad-lgbt-el-camino-hacia-una-politica-de-igualdad-y-diversidad/"><h2 class="titulo">Derechos de la comunidad LGBT+; el camino hacia una política</h2></a>
                            <div class="entrada">
                                <a href="/destacado/derechos-de-la-comunidad-lgbt-el-camino-hacia-una-politica-de-igualdad-y-diversidad/"><p> Políticas públicas y diversidad: el caso de la comunidad LGBT+ Algunos antecedentes históricos de lucha…</p></a>
                            </div>
                            <div class="iconos">
                                <i class="fas fa-heart primero"></i>90<i class="fas fa-comment-alt"></i>78<i class="fas fa-sync-alt"></i>12<i class="fas fa-bookmark ultimo"></i>34
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 align-self-center">
                        <div class="boton-derecha"><a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-derecha.png" alt=""></a></div>
                    </div>

            </div>
        </div>
        </div>
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