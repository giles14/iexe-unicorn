<?php
/*
Template Name: Programas academicos
*/
?>
<?php 
$unicorn_contador = 1;
$unicorn_grupo = 1;
$materiasMax = MAXIMAS_MATERIAS;
$imagenAsesor = get_field('imagen_coordinador');
$estiloPrograma = get_field('estilo_de_programa'); ?>
<?php get_header( ); ?>
<section id="header">
    <div id="informacion-programa" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                      <div id="desc-programa">
                          <div class="col-12 col-md-6">
                            <h2 class="tipo-oferta"><?php the_field('tipo') ?></h2>
                              <a class="button-primary"><?php the_title() ?></a>
                              <div class="descripcion-programa">
                                <?php the_field('descripcion_del_programa'); ?>
                              </div>
                              <?php if($estiloPrograma == "Programas Tradicionales") { ?>
                              <p id="RVOE" class="revoe">
                                  <strong><?php the_field('texto_rvoe'); ?></strong><br>
                                  Consultalo en: <a href="<?php the_field('link_rvoe'); ?>" class="notorio" target="_blank">www.sirvoes.sep.gob.mx</a>
                              </p>
                                <?php } ?>
                          </div>
                          <div class="col-md-4 offset-md-2 d-none d-sm-block">
                              <div class="formulario">
                                  <div class="cabecera">
                                      <h1 class="interes">¿Estás interesado?</h1>
                                  </div>
                                  <div class="cuerpo">
                                      <form id="interes">
                                          <div class="form-group">
                                            <label for="nombre">Nombre completo*</label>
                                            <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
                                          </div>
                                          <div class="form-group">
                                              <label for="correo">Correo electrónico*</label>
                                              <input type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="form-group">
                                              <label for="telefono">Teléfono móvil*</label>
                                              <input type="tel" placeholder="Ingresa aquí tu teléfono móvil" class="form-control" id="telefono" aria-describedby="emailHelp">
                                          </div>
                                          <div class="col-12 text-center">
                                              <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
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
          <div class="carousel-item">
            <div class="mask flex-center">
              
              <div class="container">
                  <div class="row">
                      <div id="desc-programa">
                          <div class="col-12 col-md-6">
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
                            <div class="col-md-5 my-auto">
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/pragmaFlex-logo.webp" alt="">
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
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">DESCRIPCIÓN<br> DEL PROGRAMA</div></div></a></div>
            <?php if($estiloPrograma == "Programas Tradicionales") { ?>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">QUÉ VAS A APRENDER </div></div></a></div>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">DÓNDE PUEDES TRABAJAR</div></div></a></div>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">NUESTRO MÉTODO DE ENSEÑANZA</div></div></a></div>
            <?php }else{ ?>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">DIRIGIDO A</div></div></a></div>
                <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">NUESTRO MÉTODO DE ENSEÑANZA</div></div></a></div>
                <?php }?>
        </div>
    </div>
</section>
<?php if(is_page('855') || is_page('835') || is_page('734')){ ?>
<section id="acreditacion-unitar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/acreditacion_cifal.webp" alt="">
            </div>
        </div>
    </div>
</section>
<?php } ?>
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
            <div class="col-md-12">
                <a href="/admisiones"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_programas_academicos.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<script>
    var input = document.querySelector("#telefono");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-beca");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
  </script>
<?php get_footer( ); ?>