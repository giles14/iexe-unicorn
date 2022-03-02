<?php
/*
Template Name: Programas academicos v2
*/
?>
<?php 
$unicorn_contador = 1;
$unicorn_grupo = 1;
$materiasMax = MAXIMAS_MATERIAS;
$imagenAsesor = get_field('imagen_donde_puedes_trabajar');
$imagenIdentificadorHead = get_field('imagen_coordinador');
$imagenIdentificador = get_field('imagen_donde_puedes_trabajar');
$estiloPrograma = get_field('estilo_de_programa'); 
$elTipo = get_field('tipo');
$elTipo = explode(" " , $elTipo);
?>

<?php get_header( ); ?>
<section id="header">
    <div id="informacion-programa" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                      <div id="desc-programa" class="<?php echo (get_field('clave_del_programa')) ? get_field('clave_del_programa')  : 'SINA'; ?>">
                          <div class="col-12 col-md-7">
                            <h2 class="tipo-oferta"><?php the_field('tipo') ?></h2>
                              <a class="button-primary"><?php the_title() ?></a>
                              <div class="descripcion-programa">
                                <?php the_field('descripcion_del_programa'); ?>
                              </div>
                              <?php if($estiloPrograma == "Programas Tradicionales") { ?>
                              <p id="RVOE" class="revoe">
                                  <strong><?php the_field('texto_rvoe'); ?></strong><br>
                                  <?php if(get_field('link_rvoe') && get_the_ID() != 1903) { ?>
                                    Consúltalo en: <a href="<?php the_field('link_rvoe'); ?>" class="notorio" target="_blank">www.sirvoes.sep.gob.mx</a>
                                  <?php } ?>
                              </p>
                                <?php } ?>
                          </div>
                          <div class="col-md-4 offset-md-1 d-none d-sm-block">
                              <div class="formulario">
                                  <div class="cabecera">
                                      <h1 class="interes"> <?php echo (is_page(1903)) ? "Pre-registrate" : "¿Estás interesado?"?></h1>
                                  </div>
                                  <div class="cuerpo">
                                      <form id="interes" method="POST" action="">
                                          <div class="form-group">
                                            <label for="nombre">Nombre completo*</label>
                                            <input type="text" placeholder="Ingresa aquí tu nombre" class="form-control" name="nombre" id="nombre" >
                                          </div>
                                          <div class="form-group">
                                              <label for="correo">Correo electrónico*</label>
                                              <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1">
                                          </div>
                                          <div class="form-group">
                                              <label for="telefono">Teléfono móvil*</label>
                                              <input type="tel" placeholder="Ingresa aquí tu teléfono móvil" class="form-control" name="telefono" id="telefono">
                                          </div>
                                          <div class="col-12 text-center">
                                          <input id="hiddenPrograma" name="hiddenPrograma" type="hidden" value="<?php echo (get_field('clave_del_programa')) ? get_field('clave_del_programa')  : 'SINA'; ?>">
                                              <button type="button" class="btn btn-primario mt-3">Enviar registro</button>
                                          </div>
                                        </form>
                                  </div>
              
                              </div>
                          </div>
          
                      </div>               
                  </div>
              </div>
            </div>
          </div>
          
          <?php if($estiloPrograma == "Programas Tradicionales") { ?>
          <div class="carousel-item">
                <div class="mask flex-center">
                <div class="container">
                    <div class="row">
                        <div id="desc-programa">
                            <div class="col-12 col-md-6">
                                <h2 class="tipo-oferta"><?php the_field('tipo') ?></h2>
                                <a class="button-primary"><?php the_title() ?></a>
                                <div class="descripcion-programa">
                                    <?php the_field('donde_puedes_trabajar'); ?>                                
                                </div>
                
                            </div>
                            <div class="col-md-4 offset-md-2 d-none d-sm-block">
                                <!--  -->
                                <?php
                                if ( !empty( $imagenAsesor ) ): ?>
                                    <img class="asesor" src="<?php echo esc_url($imagenAsesor['url']); ?>" alt="<?php echo esc_attr($imagenAsesor['alt']); ?>" />
                                <?php endif; ?>
                            </div>
            
                        </div>               
                    </div>
        
                </div>
            </div>
          </div>
          <?php } ?>
          <div class="carousel-item">
              <div class="mask flex-center">
                
                <div class="container">
                    <div class="row">
                        <div id="desc-programa">
                            <div class="col-md-6">
                            <h2 class="tipo-oferta"><?php the_field('tipo') ?></h2>
                                <a class="button-primary"><?php the_title() ?></a>
                                <div style="min-height: 250px" class="descripcion-programa">
                                    <?php the_field('creditos_anticipados'); ?>
                                </div>
                                
                
                            </div>
                            <div class="col-md-1">
                                
                            </div>
                            <div class="col-md-5 my-auto d-none d-md-block">
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo-pragmaflex.png" alt="">
                            </div>
            
                        </div>               
                    </div>
                </div>
        
              </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#informacion-programa" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#informacion-programa" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONOCE TU<br> <?php echo strtoupper($elTipo[0]) ?></div></div></a></div>
            <?php if($estiloPrograma == "Programas Tradicionales") { ?>
                <!-- <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">POR QUÉ ELEGIR ESTE PROGRAMA </div></div></a></div> -->
                <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">DÓNDE PUEDES TRABAJAR</div></div></a></div>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">NUESTRO MÉTODO DE ENSEÑANZA</div></div></a></div>
            <?php }else{ ?>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">DIRIGIDO A</div></div></a></div>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">NUESTRO MÉTODO DE ENSEÑANZA</div></div></a></div>
                <?php }?>
        </div>
    </div>
</section>
<?php if (is_page(2978)){
?>
<section id="frases-diferenciadoras">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="que-ofrece-laboral">Con este programa:</p>
                        </div>
                        <div class="col-md-8 offset-md-2 frase">
                            <p class="text-center">
                                <span class="rotate">1. Domina competencias en programación, estadística aplicada, y matemáticas para desarrollar propuestas basadas en Big Data.| 2. Aprende metodologías y herramientas tecnológicas para procesar grándes volúmenes de datos.| 3. Toma decisiones organizacionales y empresariales para potenciar la competitividad y reducir los riesgos.</span>
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/comillas.png" alt="" class="comillas">
                            </p>
                        </div>
                    </div>
                </div>
</section>
<section id="videos-testimoniales">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h1 class="titulo-plan mt-3 mb-4">¿Aún no decides?</h1></div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <a href="https://www.youtube.com/embed/biYqqtbvlC8?autoplay=1" data-lity>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/preview_que_es.webp" class="img-fluid pre-video" alt=""></a>
                    <h3 class="text-center que-vas mt-3 mb-2 mb-xs-4">La profesión con mayor crecimiento</h3>
                    <!-- <p class="texto-que-vas mt-3 mb-5 mb-sm-0">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p> -->

                   
            </div>
            <div class="col-md-5 offset-md-1 mt-5 mt-sm-0">
                <a href="https://www.youtube.com/embed/nBYUnKi6vbU?autoplay=1" data-lity>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/preview_laboral.webp" class="img-fluid pre-video" alt=""></a>
                    <h3 class="text-center que-vas mt-3 mb-2">El futuro es la ciencia de datos</h3>
                    <!-- <p class="texto-que-vas que-vas mt-3 mb-2">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p> -->
                
            </div>
        </div>
    </div>
</section>
<?php
}
?>

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
<section>
<div class="carousel-item">
            <div class="mask flex-center">
              
              <div class="container">
                  <div class="row">
                      <div id="desc-programa">
                          <div class="col-12 col-md-7">
                            <h2 class="tipo-oferta"><?php the_field('tipo') ?></h2>
                              <a class="button-primary"><?php the_title() ?></a>
                              <div class="descripcion-programa">
                                    <?php if($estiloPrograma == "Programas Tradicionales") {
                                         the_field('lo_que_vas_a_aprender');
                                     }else{
                                    echo get_field('dirigido_a');
                                } ?>
                              </div>
              
                          </div>
                          <div class="col-md-4 offset-md-1 d-none d-sm-block">
                              <!--  -->
                              <?php
                              if ( !empty( $imagenIdentificadorHead ) ): ?>
                                <img class="identificador-nuevo" src="<?php echo esc_url($imagenIdentificadorHead['url']); ?>" alt="<?php echo esc_attr($imagenIdentificadorHead['alt']); ?>" />
                            <?php endif; ?>
                          </div>
          
                      </div>               
                  </div>
              </div>
      
            </div>
          </div>
</section>
<section id="plan-de-estudios">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <h1 class="titulo-plan">Plan de Estudios</h1>
                <h2 class="description">Clases enfocadas en conocimientos <strong>útiles</strong> para tu <strong>vida profesional.</strong></h2>
            </div>
            <div class="col-12 col-md-3">
                        <select <?php echo ($estiloPrograma == "Programas Tradicionales") ? '' : 'style="display:none"' ?>  id="seleccionperiodo" class="periodo">
                            <!-- <option value="bloque-materia" selected>Todas</option> -->
                            <?php while ($unicorn_contador <= get_field('cantidad_de_periodos'))  {  ?>
                                <option value="periodo-<?php echo $unicorn_contador ?>"><?php echo $unicorn_contador ?>° <?php the_field('tipo_de_periodos'); ?></option>

                            <?php
                                $unicorn_contador ++;
                             } 
                             ?>

                            <!-- <option value="primero">1° </option>
                            <option value="segundo">2° Semestre</option>
                            <option value="tercero" >3° Semestre</option>
                            <option value="bloque-materia" selected>Todas</option> -->
                        </select>
                
            </div>
        </div>
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
                        $descripcionM = get_sub_field('descripcion_materia');
                        
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
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/botones-accion'); ?>
<?php get_template_part( 'template-parts/calcula-beca'); ?>
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