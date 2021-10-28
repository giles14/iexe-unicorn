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
                    <div class="col-md-8">
                        <img src="" alt="" class="certificado-unitar"><a href=""><img src="" alt=""></a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-5">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-landing-ssp-2.webp" alt="" class="escudo-licenciatura img-fluid">

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
                        <input id="nombre" type="text" class="form-control" placeholder="Ingresa aquí tu nombre">
                    </div>

                    <div class="col-md-4">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                    </div>
                
                    <div class="col-md-4">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingresa aquí tu número">
                    </div>                
            </div>
            <button class="enviar-landing">Enviar registro</button>
        </form>
    </div>
    
</section>
<section id="por-que-elegir">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="pregunta-sin-enfasis">¿Porqué elegir</span>
                <span class="pregunta-con-enfasis">IEXE Universidad?</span>
                <p class="text-center"><strong>Más de 44 años de experiencia</strong> nos respaldan para brindarte todas las herramientas necesarias para un óptimo desarrollo<br> personal y profesional con <strong>grandes beneficios.</strong></p>
            </div>
        </div>
        <div class="row">
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
                <div class="col-md-3">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-3 offset-md-2">

                </div>
                <div class="col-md-2">

                </div>
                
            </div>
        </div>
    </div>
</section>

    


<?php get_footer(); ?>