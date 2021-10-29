<?php /* Template Name: Landing SSP */ ?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<section id="informacion-general">
<div class="container">
        <div class="row">
            <div class="col-md-7">
                <span class="descripcion">Licenciatura en línea</span>
                <h1 class="nombre-programa">Seguridad Pública</h1>
                <h2 class="frase-heroica">Ve más alla de tus límites y alcanza tus metas con IEXE</h2>
                <p class="descripcipn-programa">
                    Esta licenciatura te prepara con las mejores herramientas para desempeñarte profesionalmente en un campo laboral altamente competitivo.
                    En IEXE Universidad te formaremos en materia de seguridad pública para ser capaz de hacer frente a los retos de seguridad que aquejan a la sociedad desde diferentes instancias y niveles de gobierno.
                </p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="bloque-descarga">

                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="" alt="" class="certificado-unitar"><a href=""><img src="" alt=""></a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-5">
                <img style="width: 550px" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-landing-ssp-2.webp" alt="" class="escudo-licenciatura d-none d-sm-block">

            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Duración del programa</h3>
                    <span class="informacion-secundaria">9 trimestes</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Fecha_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Fechas de inicio</h3>
                    <span class="informacion-secundaria">1 de Noviembre</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Validez Oficial</h3>
                    <span class="informacion-secundaria">SEP - RVOES</span>
                </div>
            </div>
            <div class="col-md-2">
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
                <ul class="podras-trabajar-en">
                    <li><strong> Instituciones gubernamentales</strong> encargadas de la prevención, procuración y reinserción social.</li>
                    <li><strong>Empresas de seguridad privada</strong> como asesores(as) o estrategas.</li>
                    <li><strong>Como consultores(as) especializados</strong> en temas de seguridad pública.</li>
                    <li>Como <strong>docentes e investigadores</strong> en temas de seguridad pública, formación y desarrollo policial.</li>
                    <li> <strong>Instituciones de seguridad pública</strong>, realizando diagnósticos y diseñando programas de prevención delictiva, de conductas antisociales y para la seguridad ciudadana.</li>
                    <li><strong>Fiscalías estatales y federales</strong>, en áreas periciales, de formación y capacitación e investigación profesional.</li>
                </ul>
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
                <div class="col-md-3 offset-md-1">
                    <h2 class="sigla-programa">MSP</h2>
                    <h3 class="nombre">Maestría en <br> Seguridad Pública</h3>
                    <a href="/ofertas-academicas" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_MSP.webp" alt="" class="img-fluid">
                </div>
                <div class="col-md-3 offset-md-1">
                    <h2 class="sigla-programa">DDP</h2>
                    <h3 class="nombre">Doctorado en<br> Políticas Públicas</h3>
                    <a href="/ofertas-academicas" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_DPP.webp" alt="" class="img-fluid">
                </div>
                
            </div>
        </div>
    </div>
</section>

    


<?php get_footer(); ?>