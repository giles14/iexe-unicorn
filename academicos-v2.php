<?php
/*
Template Name: Programas academicos V2
*/
?>
<?php 
$unicorn_contador = 1;
$unicorn_grupo = 1;
$materiasMax = MAXIMAS_MATERIAS;
$imagenAsesor = get_field('imagen_donde_puedes_trabajar');
$imagenLoQue = get_field('imagen_lo_que_vas_a_aprender');
$imagenIdentificadorHead = get_field('imagen_coordinador');
$imagenIdentificador = get_field('imagen_donde_puedes_trabajar');
$estiloPrograma = get_field('estilo_de_programa'); 
$elTipo = get_field('tipo');
$elTipo = explode(" " , $elTipo);
?>

<?php get_header( ); ?>
<section id="header">
    <div class="container">
        <div class="informacion-programa v-2">
        

        
    <div class="row">
    <div class="col-10">
        <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-7">
                                <h2 class="tipo-oferta v-2"><?php the_field('tipo') ?></h2>
                                        <a class="button-primary v-2"><?php the_title() ?></a>
                                        <div class="descripcion-programa v-2">
                                            <?php the_field('descripcion_del_programa'); ?>
                                        </div>
                                        <?php if($estiloPrograma == "Programas Tradicionales") { ?>
                                        <p id="RVOE" class="revoe mt-3">
                                            <strong><?php the_field('texto_rvoe'); ?></strong><br>
                                            <?php if(get_field('link_rvoe') && get_the_ID() != 1903) { ?>
                                                Consúltalo en: <a href="<?php the_field('link_rvoe'); ?>" class="notorio" target="_blank">www.sirvoes.sep.gob.mx</a>
                                            <?php } ?>
                                        </p>
                                            <?php } ?>
                        </div>
                        <div class="col-md-5">
                                <?php
                                    if ( !empty( $imagenIdentificadorHead ) ): ?>
                                        <img class="identificador-nuevo v-2" src="<?php echo esc_url($imagenIdentificadorHead['url']); ?>" alt="<?php echo esc_attr($imagenIdentificadorHead['alt']); ?>" />
                                    <?php endif; ?>
                        </div>
                                </div>
                        </div>
                    </div>
                    
                        
                
            
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h2 class="tipo-oferta v-2"><?php the_field('tipo') ?></h2>
                                        <a class="button-primary v-2"><?php the_title() ?></a>
                                        <div class="descripcion-programa">
                                                    <?php if($estiloPrograma == "Programas Tradicionales") {
                                                    the_field('lo_que_vas_a_aprender');
                                                }else{
                                                echo get_field('dirigido_a');
                                            } ?>
                                        </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                            <?php
                                if ( !empty( $imagenLoQue ) ): ?>
                                    <img class="lo-que-vas" src="<?php echo esc_url($imagenLoQue['url']); ?>" alt="<?php echo esc_attr($imagenLoQue['alt']); ?>" />
                            <?php endif; ?>
                    </div>
                        
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h2 class="tipo-oferta v-2"><?php the_field('tipo') ?></h2>
                                    <a class="button-primary v-2"><?php the_title() ?></a>
                                    <div class="descripcion-programa">
                                        <?php the_field('donde_puedes_trabajar'); ?>                                
                                    </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                                <?php
                                if ( !empty( $imagenAsesor ) ): ?>
                                    <img class="donde-puedes v-2" src="<?php echo esc_url($imagenAsesor['url']); ?>" alt="<?php echo esc_attr($imagenAsesor['alt']); ?>" />
                                <?php endif; ?>
                    </div>
                        
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                                <h2 class="tipo-oferta v-2"><?php the_field('tipo') ?></h2>
                                <a class="button-primary v-2"><?php the_title() ?></a>
                                <div style="min-height: 250px" class="descripcion-programa">
                                    <?php the_field('creditos_anticipados'); ?>
                                </div>
                        </div>
                        <div class="col-md-5 my-auto">
                            <img class="img-fluid pragmaflex" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo-pragmaflex.png" alt="">
                        </div>
                            
                    </div>
                </div>
                                    
            </div>
        </div>
  </div>
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Conoce tu maestría</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">¿Qué hace diferente <br> este programa?</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">¿Dónde puedes<br> trabajar?</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Nuestro método<br> de enseñanza</a>
    </div>
  </div>
  
</div>
    </div>
</div>
</section>
<section id="videos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <h1 class="titulo-plan">Videos testimoniales</h1>
            </div>
        </div>
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-5">
                <a class="in-video" href="https://www.youtube.com/embed/SH82FfSyv6c?autoplay=1" data-lity>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/preview_que_es.webp" class="img-fluid pre-video" alt=""></a>
                    <!-- <h3 class="text-center que-vas mt-3 mb-2 mb-xs-4">La profesión con mayor crecimiento</h3> -->
                    

                   
            </div>
            <div class="col-md-5 offset-md-1 mt-5 mt-sm-0">
                <a class="in-video" href="https://www.youtube.com/embed/nBYUnKi6vbU?autoplay=1" data-lity>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/preview_laboral.webp" class="img-fluid pre-video" alt=""></a>
                    <!-- <h3 class="text-center que-vas mt-3 mb-2">El futuro es la ciencia de datos</h3> -->
                    
                
            </div>
        </div>
    </div>
            
</section>


<!-- <section id="segunda-nav">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul id="navegacione" class="nav nav-tabs" role="tablist">
                    <li id="descripcion" role="presentation" class="active"><a data-target="#informacion-programa" data-slide-to="0" aria-controls="home" role="tab" data-toggle="tab">DESCRIPCIÓN<br> DEL PROGRAMA</a></li>
                    <li id="aprender" role="presentation"><a data-target="#informacion-programa" data-slide-to="1" aria-controls="profile" role="tab" data-toggle="tab">QUÉ VAS A APRENDER</a></li>
                    <li id="trabajar" role="presentation"><a data-target="#informacion-programa" data-slide-to="2" aria-controls="messages" role="tab" data-toggle="tab">DÓNDE PUEDES TRABAJAR</a></li>
                    <li id="metodo" role="presentation"><a data-target="#informacion-programa" data-slide-to="3" aria-controls="settings" role="tab" data-toggle="tab">NUESTRO MÉTODO DE ENSEÑANZA</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<style>
    section#segunda-nav{
        background: var(--primario--azul-obscuro);
    }
    #segunda-nav li {
    min-width: 100%;
    text-align: center;
    }
    #navegacione li.active {
    border-bottom: 3px solid cyan;
}
    #navegacione.nav-tabs {
  display: inline-flex;
  width: 100%;
  overflow-x: auto;
  -ms-overflow-style: none; /*// IE 10+*/
  overflow: -moz-scrollbars-none;/*// Firefox*/}
  #navegacione.nav-tabs>li.active>a,
  #navegacione.nav-tabs>li.active>a:focus,
  #navegacione.nav-tabs>li.active>a:hover {
  border-width: 0;
  border-bottom: none;
}
#navegacione.nav-tabs>li>a {
  border: none;
  color: #FFF;
}
#navegacione.nav-tabs>li.active>a,
#navegacione.nav-tabs>li>a:hover {
  border: none;
  background: transparent;
}
#navegacione.nav-tabs>li>a::after {
  content: "";  
  height: 2px;
  position: absolute;
  width: 100%;
  left: 0px;
  bottom: 1px;
  transition: all 250ms ease 0s;
  transform: scale(0);
}
#navegacione.nav-tabs>li.active>a::after,
#navegacione.nav-tabs>li:hover>a::after {
  transform: scale(1);
}
#navegacione.tab-nav>li>a::after {
  background: #21527d none repeat scroll 0% 0%;
  color: #fff;
}
#navegacione.tab-pane {
  padding: 15px 0;
}
#navegacione.tab-content {
  padding: 20px
}

#navegacione.nav-tabs::-webkit-scrollbar {
  display: none; /*Safari and Chrome*/
}
.card {
  background: #FFF none repeat scroll 0% 0%;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
  margin-bottom: 30px;
  display: block;
}

#navegacione.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
#navegacione.nav{
    flex-wrap: inherit; 
}
</style>
<?php if(is_page('855') || is_page('835') || is_page('734')){ ?>
<section id="acreditacion-unitar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid d-none d-sm-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/acreditacion_cifal.webp" alt="">
                <img class="img-fluid d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/acreditacion_cifal_movil.webp" alt="">
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if(is_page('1310') || is_page('1287')) { ?>
<section id="acreditacion-unitar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid d-none d-sm-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/aws-academy.webp" alt="">
                <img class="img-fluid d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/aws-movil.webp" alt="">
            </div>
        </div>
    </div>
</section>
<?php } ?>
<section id="plan-de-estudios">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="titulo-plan">Plan de Estudios</h1>
                <h2 class="description">Clases enfocadas en conocimientos <strong>útiles</strong> para tu <strong>vida profesional.</strong></h2>
            </div>
            <div class="col-12 col-md-6">
                        <div class="boton-descarga-plan">
                            <p class="descarga">Descarga el folleto del programa</p>
                            <span>Encontrarás el plan completo con todas las materias</span>
                        </div>
            </div>
        </div>
        <div class="container">
            <div class="row materias">
                <div class="col-md-4 desc-materias text-center">
                    <h2 class="trimestre">Trimestre 1</h3>
                    <ul class="materias v-2">
                        <li>Materia 1 <span>Optativa</span> </li>
                        <li>Materia 2</li>
                        <li>Materia 3</li>
                    </ul>
                </div>
                <div class="col-md-4 desc-materias text-center">
                    <h2 class="trimestre">Trimestre 2</h3>
                    <ul class="materias v-2">
                        <li>Materia 1</li>
                        <li>Materia 2</li>
                        <li>Materia 3</li>
                    </ul>
                </div>
                <div class="col-md-4 desc-materias text-center">
                    <h2 class="trimestre">Trimestre 3</h3>
                    <ul class="materias v-2">
                        <li>Materia 1</li>
                        <li>Materia 2</li>
                        <li>Materia 3</li>
                    </ul>
                </div>
                <div class="col-md-4 desc-materias text-center">
                    <h2 class="trimestre">Trimestre 4</h3>
                    <ul class="materias v-2">
                        <li>Materia 1</li>
                        <li>Materia 2</li>
                        <li>Materia 3</li>
                    </ul>
                </div>
                <div class="col-md-4 desc-materias text-center">
                    <h2 class="trimestre">Trimestre 5</h3>
                    <ul class="materias v-2">
                        <li>Materia 1</li>
                        <li>Materia 2</li>
                        <li>Materia 3</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function(){
                jQuery('.row.materias').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                    arrows: false
                });
            });
        </script>
        <div class="row">
        <?php 
            while( $unicorn_grupo <= get_field('cantidad_de_periodos')) {
                if( have_rows("periodo_{$unicorn_grupo}") ):
                    while( have_rows("periodo_{$unicorn_grupo}") ): the_row();
                        $materiaC = 1;
                    while( $materiaC <= $materiasMax) {   
                        if( have_rows("materia_{$materiaC}") ):
                            while( have_rows("materia_{$materiaC}") ): the_row();
                                $materia = get_sub_field('nombre_materia');
                                //$descripcionM = get_sub_field('descripcion_materia');
                                
                                if($materia){  ?>
                                    <div class="col-md-4">
                                        <div class="bloque-materia periodo-<?php echo $unicorn_grupo ?>">
                                            <h2 class="materia"><?php the_sub_field('nombre_materia') ?></h2>
                                            <h3 class="duracion"><?php echo ($estiloPrograma == "Programas Tradicionales") ? 'Duración: 16'  : get_sub_field('duracion_materia') ?> hrs.</h3>
                                            <div class="descripcion-materia">
                                                <?php the_sub_field('descripcion_materia') ?>
                                            </div>
                                            <!-- <div id="social">
                                                
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php 
                                }else{
                                    break;
                                }
                            endwhile;
                        endif;
                        $materiaC++;
                    }
                        $unicorn_grupo++;
                        echo '<br>';
                    endwhile;
                endif;
            }
        ?>
        </div>
    </div>
</section>
<?php if(false && get_field('texto_identificador')){ ?>
<div class="container">
    
</div>
<section id="identificador" class="<?php echo ( get_field('extra_size') )  ? "extra" : "" ?>">
    <div class="container">
    <div class="row">
            <div class="col-md-7 offset-md-4">
                <p class="texto-identificador" >
                    Una razón más para elegir este programa
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-1 contenedor-identificador d-none d-sm-block">
                <img src="<?php echo esc_url($imagenIdentificador['url']); ?>" alt="" class="img-fluid imagen-identificador">
            </div>
            <div class="col-md-7">
                <p class="el-identificador">
                    <?php the_field('texto_identificador') ?>
                    <!-- Esta maestría fue diseñada por el <span class="destacado"><strong>Doctor Julio Franco Corzo</strong></span>, autor de <span class="destacado">“Diseño de Políticas Públicas”</span> el <i>bestseller</i> de políticas públicas en Amazon y <strong>libro de cabecera</strong> en consultorías, agencias de gobierno y otras universidades. -->
                </p>
                
            </div>
        </div>
    </div>
</section>
<style>
section#identificador {
  background: <?php the_field('bg_color'); ?>;
}
</style>
<?php } ?>
<?php if(is_page(1310)){ ?>
    <style>
        .contenido.d-table-cell.align-middle {
        line-height: 19px;
    }
    </style>
    
<?php } ?>
<?php if( is_page(2978)){ ?>
    <section id="tus-docentes">
    <div class="container">
        <div class="row">
            <div class="col slick">
                <div class="slide-1">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/slide_profesor.png" alt="" class="img-fluid">
                    <a href="nosotros/#facultad" target="_blank" class="link-academia">Conoce más de la facultad</a>
                </div>
                <div class="slide-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/slide_profesor-2.png" alt="" class="img-fluid">
                    <a href="nosotros/#facultad" target="_blank" class="link-academia">Conoce más de la facultad</a>
                </div>
                <div class="slide-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/slide_profesor-3.png" alt="" class="img-fluid">
                    <a href="nosotros/#facultad" target="_blank" class="link-academia">Conoce más de la facultad</a>
                </div>
            </div>
            
        </div>
    </div>

    </section>
    <script>
        jQuery(document).ready(function(){
            jQuery('.col.slick').slick({
                
            });
        });
    </script>
    <style>
        .slide-1{
            /* background: green; */
            position: relative;
        }
        .slide-2{
            /* background: green; */
            position: relative;
        }
        .slide-3{
            /* background: green; */
            position: relative;
        }
        a.link-academia {
            position: absolute;
            z-index: 999;
            color: blue;
            right: 40px;
            bottom: 20px;
            font-weight: 700;
            text-decoration: underline 1px;
        }
    .slick-prev:before, .slick-next:before {
        font-family: 'slick';
        font-size: 20px;
        line-height: 0;
        /* opacity: .75; */
        color: var(--primario--azul-obscuro);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .slick-next {
        right: 40px;
    }
    .slick-prev {
        left: unset;
        display: none;
    }
    .contenido.d-table-cell.align-middle {
        line-height: 19px;
    }
    h1.titulo-plan.nuevo{
        font-size: 24px
        line-height: 30px;
    }
    h1.titulo-plan.nuevo.mt-5.mb-4 {
        font-size: 24px;
        line-height: 30px;
        text-align: center;
    }
    .texto-que-vas {
        font-size: 16px;
    }
    </style>

<?php } ?>

<section id="inscripcion">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bloque-inscripcion">
                    <h2 class="titulo">Requisitos de admisión</h2>
                    <ul class="requisitos">
                        <?php if(get_field('tipo') == "Doctorado en línea"){
                            echo $requisitos_doctorado;
                        }elseif(get_field('tipo') == "Maestría en línea"){
                            echo $requisitos_maestria;
                        }elseif(get_field('tipo') == "Master en línea" || get_field('tipo') == "Máster en línea" || get_field('tipo') == "Máster en linea"){
                            echo $requisitos_master;
                        }elseif(get_field('tipo') == "Diplomado en línea" || get_field('tipo') == "Diplomado en linea"){
                            echo $requisitos_diplomado;
                        }else{
                            echo $requisitos_licenciatura;
                        }
                        
                        ?>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="bloque-inscripcion azul">
                    <h2 class="titulo">Proceso de inscripción</h2>
                    <p>El primer paso para ingresar al programa es completar el formulario de inscripción. Una vez recibido nos pondremos en contacto para coordinar la entrevista (online).</p>
                    <p class="text-center">
                        <a class="btn btn-primario mt-3" href="/admisiones">Quiero inscribirme</a>
                    </p>
                    
                </div>
                <?php if(get_field('tipo') == "Maestría en línea"){ ?>
                        <!-- <a href="https://bit.ly/3EUMlDB" target="_blank"><img class="img-fluid mt-4" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/minibanner_IEXE_Interno-talento.webp" alt=""></a> -->
                    <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php if(!(get_field('tipo') == "Maestría en línea")){ ?>
                <!-- <a href="https://bit.ly/3EUMlDB" target="_blank"><img class="img-fluid mt-4" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/Banner_IEXE_Interno-talento.webp" alt=""></a> -->
            <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/botones-accion'); ?>
<?php get_template_part( 'template-parts/calcula-beca', null, array(
    'porcentaje' =>  $porcentajeBeca
)); ?>
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-none d-sm-block">
                <a href="/admisiones"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_programas_academicos.webp" alt=""></a>
            </div>
            <div class="col-md-12 d-block d-sm-none">
                <a href="/admisiones"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_programas_academicos_r.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>