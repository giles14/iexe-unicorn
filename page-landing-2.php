<?php /* Template Name: Landing Modelo 2*/ ?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<?php $image_principal = get_field('imagen_de_programa'); ?>
<style>
    body {
    background: url(<?php echo esc_url($image_principal['url']);  ?>) 0% 0% / contain no-repeat rgb(239, 239, 239);
    background-repeat: no-repeat;
    }
</style>
<section id="informacion-general">
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <span class="descripcion"><?php the_field('tipo_de_programa'); ?></span>
                <h1 class="nombre-programa"><?php the_title();  ?></h1>
                <h2 class="frase-heroica"><?php the_field('frase_heroica'); ?></h2>
                <p class="descripcipn-programa">
                    <?php the_field('descripcion_de_programa'); ?>
                </p>
                
                
            </div>
            <div class="col-md-4 offset-md-2">
            <div class="formulario">
                                  <div class="cabecera">
                                      <h1 class="interes">REGÍSTRATE y te <br> contactará un asesor</h1>
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
                                              <label for="telefono">Teléfono o celular*</label>
                                              <input type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp">
                                          </div>
                                          <div class="col-12 text-center">
                                              <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                                          </div>
                                        </form>
                                  </div>
              
                              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_horario_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Duración del programa</h3>
                    <span class="informacion-secundaria"><?php the_field('duracion'); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Fecha_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Fechas de inicio</h3>
                    <span class="informacion-secundaria"><?php the_field('fechas_de_inicio'); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Validez Oficial</h3>
                    <span class="informacion-secundaria">SEP - RVOE</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Pragma_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Modelo Educativo</h3>
                    <span class="informacion-secundaria">Pragmaflex</span>
                </div>
            </div>
        </div>

    </div>

</section>
<section id="formulario-interes-landing">
    <div class="container">
        
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">¿Estas interesado en nuestro programa?</h1>
                </div>
                <div class="col-md-12">
                    <p class="el-por-que">
                        La misión de IEXE universidad es y seguirá siendo ayudar a nuestros alumnos a crear <strong>valor público</strong>, a través de la enseñanza de herramientas prácticas y modelos para la <strong>toma de decisiones</strong> mediante una <strong>plataforma disponible las 24 horas del día.</strong>
                    </p>
                    
                </div>               
            </div>
            
        </form>
    </div>
    
</section>
<section id="por-que-elegir">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="podras">Podrás trabajar en:</h2>
                <!-- <ul class="podras-trabajar-en">
                    <li><strong> Entidades gubernamentales</strong> como servidor(a) público(a), realizando procesos de asesoría y liderazgo para una efectiva toma de decisiones y procesos de análisis de políticas públicas, así como para la mejora del desempeño gubernamental y el logro de objetivos institucionales.</li>
                    <li><strong>Partidos políticos</strong>, realizando análisis político y electoral.</li>
                    <li><strong>Organizaciones de la sociedad civil</strong> elaborando proyectos de investigación para incidir en proyectos y políticas públicas.</li>
                    <li><strong>Organismos multilaterales</strong> de carácter nacional e internacional.</li>
                </ul> -->
                <?php the_field('podras_trabajar') ?>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Usa el tiempo a tu favor:</strong> <br> Concluye tu licenciatura en 3 años o maestría en 16 meses.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Plataforma digital</strong><br> Concluye tu licenciatura en 3 años o maestría en 16 meses.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Becas y beneficios:</strong><br>Becas y apoyos sin condiciones para tus estudios.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Garantía de continuidad de estudios:</strong><br> infraestructura de vanguardia para garantizar la continuidad de tus estudios antes cualquier circunstancia.</p>
            </div>
        </div> -->
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center relacionados">Programas relacionados</h1>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left">
                    <h2 class="sigla-programa">MSP</h2>
                    <h3 class="nombre">Maestría en <br> Seguridad Pública</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_MSP.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left mt-3">
                    <h2 class="sigla-programa">DDP</h2>
                    <h3 class="nombre">Doctorado en<br> Políticas Públicas</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_DPP.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                
            </div>
        </div>
    </div>
</section>

    

<?php get_template_part( 'template-parts/footer-landing'); ?>