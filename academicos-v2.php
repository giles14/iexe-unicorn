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
                <a class="in-video" href="https://www.youtube.com/embed/SH82FfSyv6c?autoplay=1" data-lity>
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
            <a href="https://iexe.edu.mx/wp-content/uploads/2022/05/Brochure-2022-MCDA.pdf" target="_blank">
                <div class="boton-descarga-plan">
                            <p class="descarga">Descarga el folleto del programa</p>
                            <span>Encontrarás el plan completo con todas las materias</span>
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/flecha-descarga.png" alt="" class="download-icon">
                </div>
            </a>
            </div>
        </div>
        <!-- <div class="container">
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
        </div> -->

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
        <div class="row materias">
        <?php 
            while( $unicorn_grupo <= get_field('cantidad_de_periodos')) {
                if( have_rows("periodo_{$unicorn_grupo}") ):
                    while( have_rows("periodo_{$unicorn_grupo}") ): the_row();
                        $materiaC = 1; ?>
                    <div class="col-md-4 desc-materias text-center">
                        <h2 class="trimestre">Trimestre <?php echo $unicorn_grupo ?></h3>
                        <ul class="materias v-2">
                        <?php
                    while( $materiaC <= $materiasMax) { ?>
                    
                        
                    <?php
                        if( have_rows("materia_{$materiaC}") ):
                            ?> 
                                
                            <?php
                            while( have_rows("materia_{$materiaC}") ): the_row();
                                $materia = get_sub_field('nombre_materia');
                                //$descripcionM = get_sub_field('descripcion_materia');
                                
                                if($materia){  ?>
                                    <li class="materia"><?php the_sub_field('nombre_materia') ?></li>
                                    <?php 
                                }else{
                                    break;
                                }
                            endwhile; ?>
                                
                            <?php 
                        endif;
                        $materiaC++;
                    } ?>
                        </ul>
                        </div>
                    <?php 
                        $unicorn_grupo++;
                    endwhile;
                    ?> 
                    
                    <?php
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

<section id="claves">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="bloque-clave">
                    <div class="icono-bloque-clave"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/reloj.png" alt=""></div>
                    <p class="nombre-elemento-clave">Duración del programa</p>
                    <div class="linea-degradada"></div>
                    <div class="info-especial">15 meses</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bloque-clave">
                    <div class="icono-bloque-clave"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/birrete.png" alt=""></div>
                    <p class="nombre-elemento-clave">Validez <br>Oficial</p>
                    <div class="linea-degradada"></div>
                    <div class="info-especial">SEP - RVOE</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bloque-clave">
                    <div class="icono-bloque-clave"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/curso-por-internet.png" alt=""></div>
                    <p class="nombre-elemento-clave">Maestrías <br> 100%</p>
                    <div class="linea-degradada"></div>
                    <div class="info-especial">En línea</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bloque-clave">
                    <div class="icono-bloque-clave"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-min.png" alt=""></div>
                    <p class="nombre-elemento-clave">Modelo <br> Educativo</p>
                    <div class="linea-degradada"></div>
                    <div class="info-especial">Pragmaflex</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tienes-dudas">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1 class="deseas">¿Tienes alguna duda o deseas recibir más información?</h1>
            </div>
        </div>
        <form>
            <div class="form-row mt-3 pb-5">
                <div class="col">
                    <label for="nombre-f-1">Nombre completo*</label>
                    <input type="text" id="nombre-f-1" class="form-control" placeholder="Ingresa aquí tu nombre">
                </div>
                <div class="col">
                    <label for="correo-f-1">Correo electrónico*</label>
                    <input type="text" id="correo-f-1" class="form-control" placeholder="Ingresa aquí tu correo electrónico">
                </div>
                <div class="col">
                    <button class="btn btn-primario mt-3">Solicitar información</button>
                </div>
            </div>
        </form>
    </div>  
</section>

<style>
    section#tienes-dudas{
        background: linear-gradient(90deg, rgba(222,218,250,1) 0%, rgba(219,229,245,1) 75%, rgba(216,217,219,1) 100%);
    }
    h1.deseas {
    font-size: 36px;
    font-family: var(--familia-titulos);
    }
    #tienes-dudas button.btn.btn-primario {
        background: linear-gradient(90deg, rgba(37,51,244,1) 0%, rgba(136,119,242,1) 100%);
        color: #FFF;
        border-radius: 25px;
        padding: 6px 50px;
        font-weight: bold;
        font-size: 18px;
        -webkit-box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
        box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
        border: 0px;
        bottom: 1px;
        position: absolute;
    }
    #tienes-dudas label {
        margin-bottom: 0;
        font-weight: 800;
    }
    #tienes-dudas input {
        border-radius: 0px;
        border-color: #adadad;
    }
    #tienes-dudas input::placeholder {
    border-radius: 0px;
    border-color: #adadad;
    color: var(--primario-azul);
    font-size: 14px;
}
    .bloque-clave{
        width: 210px;
        height: 210px;
        background: var(--primario--azul-obscuro);
        box-shadow: -15px 20px 30px #001C3A5C;
        border-radius: 15px;
        position: relative;
    }
    .icono-bloque-clave{
        right: 15px;
        top: 15px;
        position: absolute;
    }
    p.nombre-elemento-clave{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 24px;
        color: #F6f6f6;
        font-weight: 800;
        line-height: 22px;
        margin-top: 78px;
        margin-left: 19px;
        position: absolute;
    }
    .linea-degradada{
        background: linear-gradient(90deg, rgba(0,255,232,1) 0%, rgba(255,255,255,0) 100%);
        height: 5px;
    }
    .linea-degradada {
    background: linear-gradient(90deg, rgba(0,255,232,1) 0%, rgba(255,255,255,0) 100%);
    height: 3px;
    width: 100px;
    position: absolute;
    top: 135px;
    left: 20px;
}
.info-especial {
    color: var(--primario-cyan);
    font-size: 21px;
    font-weight: 300;
    position: absolute;
    bottom: 25px;
    left: 15px;
}
#estas-interesado-formulario h1 {
    text-align: center;
    font-weight: 800;
    color: var(--primario-cyan);
    font-family: var(--familia-titulos);
    margin-bottom: 28px;
}
#estas-interesado-formulario p {
    color: #FFF;
    font-family: var(--familia-titulos);
    font-size: 30px;
    line-height: 51px;
    font-weight: 400;
}
.col-md-12.forma {
    background: var(--primario--azul-obscuro);
    padding: 27px 96px;
    border-radius: 15px;
    margin-bottom: 40px;
}
#estas-interesado-formulario input[type="text"] {
    background: none;
    color: #fff;
    border: none;
    border-bottom: 2px solid #B8C6E9;
    color: #B8C6E9;
    border-spacing: 4px;
    line-height: 0px;
    font-family: 'Nunito Sans';
    font-size: 24px;
    width: 220px;
}
.iti.iti--allow-dropdown.iti--separate-dial-code {
    display: inline;
}
#estas-interesado-formulario input[type="text"]::placeholder {
    color: #B8c6E9;
    font-weight: 300;
    letter-spacing: -0.5px;
}
#estas-interesado-formulario button {
    background: var(--primario-cyan);
    border: none;
    border-radius: 25px;
    padding: 10px 103px;
    font-weight: 800;
    color: var(--primario--azul-obscuro);
    font-size: 20px;
    margin: 32px auto 24px auto;
    display: block;
}

section#claustro-academico {
    border-bottom: 11px solid blue;
}
section#claustro-academico {
    border-bottom: 8px solid blue;
    margin-bottom: 64px;
}
.profr {
    position: relative;
}
.prof-seleccionado {
    position: absolute;
    top: -15px;
    background: url(<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/cuadroSeleccion.png);
}
.info {
    position: relative;
    margin-top: 285px;
    margin-left: 15px;
    color: #FFF;
}
.prof-seleccionado .nombre {
    font-family: var(--familia-titulos);
    font-size: 18px;
}
.link-perfil {
    color: cyan;
    text-decoration: underline;
    text-align: right;
    margin-right: 20px;
    margin-top: 45px;
}
.prof-seleccionado .rol {
    font-weight: 100;
    font-family: var(--familia-general);
}
img.download-icon {
    position: absolute;
    right: 25px;
    top: 17px;
}
h3.inicio-clases{
    text-align: center;
    font-family: var(--familia-titulos);
    color: var(--primario-azul);
    font-size: 24px;
}
p#conteo-reversa {
    text-align: center;
    font-family: var(--familia-general);
    font-size: 36px;
    font-weight: 300;
}
.prof-seleccionado {
    position: absolute;
    top: -15px;
    background: url(https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets//img/cuadroSeleccion.png);
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
    display: none;
}
.prof-seleccionado.activo {
    display: block;
}
.hidden{
    display: none;
}
.hidden.prof-seleccionado.show{
    display:block;
    cursor: pointer;
}
.full-info {
    height: 98%;
    width: 96%;
    background: var(--primario--azul-obscuro);
    display: none;
    padding: 24px;
    color: #FFF;
    font-size: 15px;
    font-weight: 300;
}
</style>
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
                    <h3 class="inicio-clases mt-4">Próximo inicio de clases</h3>
                    <p id="conteo-reversa"></p>
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
<section id="estas-interesado-formulario">
    <div class="container">
        <div class="row">
            <div class="col-md-12 forma">
                <h1>¿ESTÁS INTERESADO?</h1>
                <p>¡Hola! me llamo <input type="text" name="nombre" placeholder="escribe tu nombre ">, estoy interesado en selecciona programa. <br> Me gustaría que me contacte un asesor educativo y poder saber más de este programa. <br>
                 Pueden contactarme al teléfono <input id="telefono" name="telefono" type="text" placeholder="tu teléfono" style="width: 280px">  y al email <input type="text" name="correo" placeholder="correo electrónico">. ¡Gracias!</p>
                 <button>Enviar solicitud</button>
            </div>
        </div>
    </div>
</section>
<section id="claustro-academico">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="titulo-plan">Claustro Académico</h1>
                <h2 class="description">Clases enfocadas en conocimientos útiles para tu vida profesional.</strong></h2>
            </div>
            <div class="col-md-3">
                <img class="img-fluid profr" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/profes_03.png" alt="">
                <div class="hidden prof-seleccionado">
                    <div class="info">
                        <div class="nombre">Mtro. Leopoldo Garza</div>
                        <div class="rol">Director académico</div>
                        <div class="link-perfil"><a onclick="myFunction(this)">Ver Perfil</a></div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <img class="img-fluid profr" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/profes_05.png" alt="">
                <div class="prof-seleccionado">
                    <div class="info">
                        <div class="nombre">Mtro. Brenda Graciela</div>
                        <div class="rol">Profesor Bases de Datos</div>
                        <div class="link-perfil"><a onclick="myFunction(this)">Ver Perfil</a></div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <img class="img-fluid profr" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/profes_07.png" alt="">
                <div class="prof-seleccionado">
                    <div class="full-info">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae iure adipisci itaque nulla cum nisi officia quaerat deserunt laboriosam est autem suscipit officiis enim architecto voluptas accusantium earum, dolor maxime!
                    </div>
                    <div class="info">
                        <div class="nombre">Mtro. Leopoldo Garza</div>
                        <div class="rol">Director académico</div>
                        <div class="link-perfil"><a onclick="myFunction(this)">Ver Perfil</a></div>
                    </div>
                    
                </div>   
            </div>
            <div class="col-md-3">
                <img class="img-fluid profr" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/profes_09.png" alt="">
                <div class="prof-seleccionado">
                    <div class="full-info">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae iure adipisci itaque nulla cum nisi officia quaerat deserunt laboriosam est autem suscipit officiis enim architecto voluptas accusantium earum, dolor maxime!
                    </div>
                    <div class="info">
                        <div class="nombre">Mtro. Leopoldo Garza</div>
                        <div class="rol">Director académico</div>
                        <div class="link-perfil"><a onclick="myFunction(this)">Ver Perfil</a></div>
                    </div>
                    
                </div> 
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/calcula-beca', null, array(
    'porcentaje' =>  $porcentajeBeca
)); ?>

<style>

</style>
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
<script>
var countDownDate = new Date("Jul 1, 2022 00:01:00").getTime();


var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("conteo-reversa").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Aperturando siguiente ciclo";
  }
}, 1000);
</script>
<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<script>
    console.log("antes de funcion");
const containeros = document.querySelectorAll('#claustro-academico .col-md-3');
containeros.forEach(f => f.addEventListener('mouseenter', function() {
  containeros.forEach(e => {
    var div = e.querySelector('div');
    div.classList.add('hidden');
    div.classList.remove('show');
    const list = Array.from(document.querySelectorAll('.full-info'));
    list.forEach(el => {
        el.style.display = 'none';
    });
    //y = document.querySelector('.full-info');

  })
  this.querySelector('div').classList.add('show')
}));
function myFunction(xparent) {
    y = xparent.parentElement
    //var x = document.getElementsByClassName('full-info');
    var y = xparent.closest('.prof-seleccionado');
    var z = y.querySelector('.full-info');
    //console.log(x);
    if (z.style.display === 'block') {
        z.style.display = 'none';
    } else {
        z.style.display = 'block';
    }
}
</script>
<?php get_footer( ); ?>