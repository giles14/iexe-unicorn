<?php /* Template Name: Landing SSP */ ?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<section id="informacion-general">
<div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <span class="descripcion">Licenciatura en línea</span>
                <h1 class="nombre-programa">Seguridad Pública</h1>
                <h2 class="frase-heroica">Ve más alla de tus límites y<br> alcanza tus metas con IEXE</h2>
                <p class="descripcipn-programa">
                    Programa acdémico que te da la preparación para la <strong>prevención, investigación y persecución</strong> de la <strong>delincuencia</strong> en términos de las leyes vigentes. Así mismo, te brinda los conocimientos sobre la función del <strong>Estado</strong> y las instituciones encargadas de la <strong>seguridad pública,</strong> con el fin de conservar el orden y la paz social, así como defender las garantías y <strong>derechos humanos</strong> de la ciudadanía.
                </p>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <a href="https://bit.ly/iexeLSSP" target="_blank"><div class="bloque-descarga">
                            <p>Descarga el folleto <br>del programa</p><img class="icono-descargar" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_descargar_IEXE.webp" alt="">
                        </div></a>
                    </div>
                    <div class="col-md-8">
                        <!-- <img src="" alt="" class="certificado-unitar"><a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_descargar_IEXE.webp" alt=""></a> -->
                    </div>
                </div>
                
            </div>
            <div class="col-md-5 d-none d-lg-block">
                <img style="width: 550px" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-landing-ssp-2.webp" alt="" class="escudo-licenciatura">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_horario_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Duración del programa</h3>
                    <span class="informacion-secundaria">9 Cuatrimestres</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Fecha_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Fechas de inicio</h3>
                    <span class="informacion-secundaria">1 de Noviembre</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Validez Oficial</h3>
                    <span class="informacion-secundaria">SEP - RVOES</span>
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
            
                    <div class="col-md-4">
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingresa aquí tu nombre">
                    </div>

                    <div class="col-md-4">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                          <input type="hidden" id="programa" name="programa" value="lsp">
                    </div>
                
                    <div class="col-md-4">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingresa aquí tu número">
                    </div>                
            </div>
            <button type="button" class="enviar-landing">Enviar registro</button>
        </form>
    </div>
    
</section>
<section id="por-que-elegir">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="podras">Podrás trabajar en:</h2>
                <p class="descripcipn-programa negro">
                    Puedes desempeñarte en alguna de las instituciones que forman parte del  <strong>Sistema Nacional de Seguridad Pública</strong>, en los órdenes <strong>Federal, Estatal y Municipal</strong>, tales como: la <strong>Secretaría de Gobernación</strong>, la <strong>Guardia Nacional</strong>, la <strong>Fiscalía General de la República</strong>, las fiscalías generales de los estados, las subsecretarías de investigación policial, las direcciones municipales de seguridad y el sistema penitenciario. Además, puedes compartir tu talento y conocimientos en instancias privadas de seguridad y en el desarrollo de <strong>proyectos de consultoría.</strong>    
                </p>
                <!-- <ul class="podras-trabajar-en">
                    <li><strong> Instituciones gubernamentales</strong> encargadas de la prevención, procuración y reinserción social.</li>
                    <li><strong>Empresas de seguridad privada</strong> como asesores(as) o estrategas.</li>
                    <li><strong>Como consultores(as) especializados</strong> en temas de seguridad pública.</li>
                    <li>Como <strong>docentes e investigadores</strong> en temas de seguridad pública, formación y desarrollo policial.</li>
                    <li> <strong>Instituciones de seguridad pública</strong>, realizando diagnósticos y diseñando programas de prevención delictiva, de conductas antisociales y para la seguridad ciudadana.</li>
                    <li><strong>Fiscalías estatales y federales</strong>, en áreas periciales, de formación y capacitación e investigación profesional.</li>
                </ul> -->
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
<section id="el-por-que">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1 class="text-center el-porque"><span class="pregunta-sin-enfasis">¿Por qué elegir</span> IEXE Universidad?</h1>
                <p class="texto-por-que text-center">La misión de IEXE universidad es y seguirá siendo ayudar a nuestros alumnos a crear<br> <strong>valor público</strong>, a través de la enseñanza de herramientas prácticas y modelos para la<br> <strong>toma de decisiones</strong> mediante una <strong>plataforma disponible las 24 horas del día.</strong></p>
            </div>
        </div>
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